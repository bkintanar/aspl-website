<?php
/**
 * Created by PhpStorm.
 * User: bkintanar
 * Date: 2/8/14
 * Time: 5:28 AM
 */

class Student extends Eloquent {

    protected $table = 'students';

    protected $data_r = array();

    protected $_subjects_for_next_semester = array();

    protected $_units_to_enroll = 0;

    protected $_semestral_units_available = 0;

    public function curriculum()
    {
        return $this->belongsTo('Curriculum');
    }

    public function getEnrolledSubjects()
    {
        return $this->hasMany('EnrolledSubject');
    }

    public function enrolledSubjects()
    {
        $enrolledSubjects = $this->getEnrolledSubjects;

        foreach($enrolledSubjects as $data)
        {
            $this->data_r[$data->school_year_id][$data->semester_id][$data->subject_id] = array(
                'subject' => Subject::whereId($data->subject_id)->first(),
                'grade'   => $data->grade);
        }
        return $this->data_r;
    }

    public function canEnrollSubject($subjectToEnroll)
    {
        $prerequisites = $subjectToEnroll->prerequisites();
        $corequisites  = $subjectToEnroll->corequisites();

        foreach ($prerequisites as $prerequisite)
        {
            if (!$this->hasPassedSubject($prerequisite))
            {
                return false;
            }
        }

        foreach ($corequisites as $corequisite)
        {
            if (!Student::canEnrollSubject($corequisite))
            {
                return false;
            }
        }

        return true;
    }

    public function hasPassedSubject($subject)
    {
        $grade = EnrolledSubject::whereStudentId($this->id)->whereSubjectId($subject->id)->pluck('grade');

        if (!empty($grade))
        {
            $passing = $this->curriculum->curriculum_data()->whereSubjectId($subject->id)->pluck('passing');

            if ($grade >= $passing)
            {
                return true;
            }
        }

        return false;
    }

    public function getProposedList($_semester = null)
    {
        $_curriculum_id = $this->curriculum_id;
        $_standing      = $this->standing;

        $this->_units_to_enroll = $this->_semestral_units_available = 0;
        $_subject_student_cant_take = array();

        // Get next semester
        if (empty($_semester))
        {
            list($_standing, $_semester) = Semester::getNextSemester($_standing);
        }

        // Can't use whereYear since it conflicts to Illuminate\Database\Query\Builder::whereYear()
        $_curriculum_subjects_for_next_semester = CurriculumData::whereCurriculumId($_curriculum_id)->where('year', $_standing)->whereSemesterId($_semester)->get();

        foreach($_curriculum_subjects_for_next_semester as $_curriculum_subject)
        {
            $_subject = Subject::whereId($_curriculum_subject->subject_id)->first();

            if (in_array($_subject, $this->_subjects_for_next_semester)) continue;

            if (Student::canEnrollSubject($_subject) and !in_array($_subject, $this->_subjects_for_next_semester))
            {
                array_push($this->_subjects_for_next_semester, $_subject);
                $this->_units_to_enroll += $_subject->unit;
            }
            else
            {
                array_push($_subject_student_cant_take, $_subject);
            }
            
            $this->_semestral_units_available += $_subject->unit;
            $_last_id = $_curriculum_subject->id;
        }

        // If there's a subject a student can't take that means there's one or more subjects the student didn't pass
        if (count($_subject_student_cant_take))
        {
            $_failed_subjects = Student::getCurrentFailedSubjects();

            // There's a need to add failed subjects to the proposed list
            // FIXME: take into consideration the availablity of subject
            foreach($_failed_subjects as $_subject)
            {
                if ($this->_units_to_enroll + $_subject->unit <= $this->_semestral_units_available and ($_subject->available & $_semester))
                {
                    array_push($this->_subjects_for_next_semester, $_subject);
                    $this->_units_to_enroll += $_subject->unit;
                }
            }

            // substitute the subjects that the student cant take. mind the max limit of units in that semester and standing
            $_possible_substitute_subjects = CurriculumData::with('subject')->whereCurriculumId($_curriculum_id)->where('id', '>', $_last_id)->get();

            foreach($_possible_substitute_subjects as $_curriculum_subject)
            {
                if (Student::canEnrollSubject($_curriculum_subject->subject) and ($this->_units_to_enroll + $_curriculum_subject->subject->unit <= $this->_semestral_units_available))
                {
                    array_push($this->_subjects_for_next_semester, $_curriculum_subject->subject);
                    $this->_units_to_enroll += $_curriculum_subject->subject->unit;
                }

                if ($this->_units_to_enroll == $this->_semestral_units_available)
                {
                    break;
                }
            }
        }

        return $this->_subjects_for_next_semester;
    }

    public function getCurrentFailedSubjects()
    {
        $_school_year    = DBConfig::whereName('school_year')->pluck('value');
        $_school_year_id = SchoolYear::whereSchoolYear($_school_year)->pluck('id');
        $_semester_id    = DBConfig::whereName('semester')->pluck('value');

        $_current_enrolled_subjects = EnrolledSubject::with('subject')->whereStudentId($this->id)->whereSchoolYearId($_school_year_id)->whereSemesterId($_semester_id)->get();

        $_failed_subjects = array();
        foreach ($_current_enrolled_subjects as $_enrolled_subject)
        {
            if (!Student::hasPassedSubject($_enrolled_subject->subject))
            {
                array_push($_failed_subjects, $_enrolled_subject->subject);
            }
        }

        return $_failed_subjects;
    }
}