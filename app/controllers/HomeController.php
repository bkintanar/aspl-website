<?php

class HomeController extends BaseController {

    public function __construct()
    {
        parent::__construct();
        parent::_get_script(__FILE__);
    }

	public function index()
	{
        echo 'Display Prospectus for ' . Course::whereId(2)->first()->name . '<br /><br />';

        $_curriculum = Curriculum::with('curriculum_data')->whereCourseId(2)->first();

        $data_r = $_curriculum->data();

        $firstYearFirstSem = $_curriculum->getSubjectsByYearAndSemester(1, 2);

        foreach ($firstYearFirstSem as $key => $value)
        {
            echo $value['subject'] . '<br />';
        }

        $_subject = Subject::whereId(30)->first();
        $_prereqs = $_subject->prerequisites();

        foreach($_prereqs as $_prereq)
        {
            print($_prereq->code . '<br />');
        }

        $this->data['page'] = 'Home';
        $this->_template_data('home');
	}
}