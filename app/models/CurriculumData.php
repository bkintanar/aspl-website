<?php
/**
 * Created by PhpStorm.
 * User: bkintanar
 * Date: 2/8/14
 * Time: 5:28 AM
 */

class CurriculumData extends Eloquent {

    protected $table     = 'curriculum_data';

    public function curriculum()
    {
        return $this->belongsTo('Curriculum');
    }

    public function subject()
    {
    	return $this->belongsTo('Subject');
    }
} 