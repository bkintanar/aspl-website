<?php namespace Administrator;

class CoursesController extends \BaseController {

    public function __construct()
    {
        parent::__construct();
        parent::_get_script(__FILE__);
    }

	public function index()
	{
        $_courses = \Course::all();

        $this->data['data_table'] = $_courses;
        $this->data['page'] = 'List of Courses';
        $this->data['page_descrption_small'] = 'Overview';
        $this->data['page_description'] = 'Home';
        $this->_template_data('administrator.courses');
    }

    public function deactivateToggle()
    {
        if (\Request::ajax())
        {
            $_id = \Input::get('id');
            $_course = \Course::whereId($_id)->first();

            $_course->active = $_course->active == 0 ? 1 : 0;
            $_course->save();

            return "success";
        }
    }
}