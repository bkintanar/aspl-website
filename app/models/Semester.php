<?php
/**
 * Created by PhpStorm.
 * User: bkintanar
 * Date: 2/8/14
 * Time: 5:28 AM
 */

class Semester extends Eloquent {

    protected $table = 'semesters';

    public static function getNextSemester($standing)
    {
        $current_semester = DBConfig::whereName('semester')->pluck('value');
        $next_semester    = Semester::where('id', '>', $current_semester)->orderBy('id')->pluck('id');

        if($next_semester)
        {
        	return array($standing, $next_semester);
        }

        // FIXME: use getStanding()
        return array($standing+1, Semester::orderBy('id')->first()->pluck('id'));
    }
} 