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

        foreach ($prerequisites as $prerequisite)
        {
            $hasPassed = $this->hasPassedSubject($prerequisite);

            if (!$hasPassed)
            {
                return false;
            }
        }

        return true;
    }

    public function hasPassedSubject($subject)
    {
        $grade = EnrolledSubject::whereSubjectId($subject->id)->pluck('grade');

        if ($grade != '')
        {
            $passing = $this->curriculum->curriculum_data()->whereSubjectId($subject->id)->pluck('passing');

            if ($grade >= $passing)
            {
                return true;
            }
        }

        return false;
    }

    public function getProposedList($semester = null)
    {
        $_curriculum_id = $this->curriculum_id;
        $_standing      = $this->standing;
        if ($semester == null)
        {
            $semester = Semester::getNextSemester($_curriculum_id, $_standing);
        }


        // get current standing
        // get current semester
        //
    }
}