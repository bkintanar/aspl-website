<?php
/**
 * Created by PhpStorm.
 * User: bkintanar
 * Date: 2/8/14
 * Time: 5:28 AM
 */

class EnrolledSubject extends Eloquent {

    protected $table = 'enrolled_subjects';

    public function student()
    {
        return $this->belongsTo('Student');
    }

    public function subject()
    {
    	return $this->belongsTo('Subject');
    }
}