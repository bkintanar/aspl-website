<?php
/**
 * Created by PhpStorm.
 * User: bkintanar
 * Date: 2/8/14
 * Time: 5:28 AM
 */

class Semester extends Eloquent {

    protected $table = 'semesters';

    public static function getNextSemester($curriculum_id, $standing)
    {
        $curriculum = Curriculum::whereId($curriculum_id)->first();

        print_r($curriculum->data());die();
    }
} 