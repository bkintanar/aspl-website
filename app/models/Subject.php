<?php
/**
 * Created by PhpStorm.
 * User: bkintanar
 * Date: 2/8/14
 * Time: 5:28 AM
 */

class Subject extends Eloquent {

    protected $table = 'subjects';

    public function directPrerequisites()
    {
        return $this->belongsToMany('Subject', 'subject_prerequisite', 'subject_id', 'prerequisite_id');
    }

    public function directCorequisites()
    {
        return $this->belongsToMany('Subject', 'subject_corequisite', 'subject_id', 'corequisite_id');
    }

    public function prerequisites()
    {
        $prerequisites = $this->directPrerequisites;

        $all = array();
        foreach($prerequisites as $subject)
        {
            if (count($subject->directPrerequisites))
            {
                $all += $subject->prerequisites();
            }
            array_push($all, $subject);
        }

        rsort($all);

        return $all;
    }

    public function corequisites()
    {
        $corequisites = $this->directCorequisites;

        $all = array();
        foreach($corequisites as $subject)
        {
            if (count($subject->directCorequisites))
            {
                $all += $subject->corequisites();
            }
            array_push($all, $subject);
        }

        rsort($all);

        return $all;
    }
} 