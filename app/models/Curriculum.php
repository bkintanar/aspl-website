<?php
/**
 * Created by PhpStorm.
 * User: bkintanar
 * Date: 2/8/14
 * Time: 5:28 AM
 */

class Curriculum extends Eloquent {

    protected $table  = 'curriculums';
    protected $data_r = array();

    public function __constructor()
    {
        $data_r = $this->data();
    }

    public function curriculum_data()
    {
        return $this->hasMany('CurriculumData');
    }

    /**
     * A simplified array respesenting the curriculum data
     * @return array of data_r with indices of year_id, semester_id, subject_id
     */
    public function data()
    {
        /**
         * foreach ($data_r as $year => $semesters)
         * {
         *     print ('Year ' . $year . '<br />');
         *     foreach($semesters as $semester => $subjects)
         *     {
         *         print('Semester ' . $semester . '<br />');
         *         foreach($subjects as $key => $value)
         *         {
         *             print($value['subject']->code . ', ' . (float)$value['passing'] . '<br />');
         *         }
         *     }
         * }
         */

        $curriculum_data = CurriculumData::whereCurriculumId($this->id)->get();

//        print_r($curriculum_data);die;

        foreach($curriculum_data as $data)
        {
            $this->data_r[$data->year][$data->semester_id][$data->subject_id] = array(
                'subject' => Subject::whereId($data->subject_id)->first(),
                'passing' => $data->passing);
        }
        return $this->data_r;
    }

    public function getSubjectsByYearAndSemester($year, $semester)
    {
//        print_r($this->data_r);die;
        return $this->data_r[$year][$semester];
    }
} 