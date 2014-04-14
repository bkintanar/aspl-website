<?php namespace Administrator;

class CollegesController extends \BaseController {

    public function __construct()
    {
        parent::__construct();
        parent::_get_script(__FILE__);
    }

	public function index()
	{
        $_colleges = \College::all();

        $this->data['data_table'] = $_colleges;
        $this->data['page'] = 'List of Colleges';
        $this->data['page_descrption_small'] = 'Overview';
        $this->data['page_description'] = 'Home';
        $this->_template_data('administrator.colleges');
    }

    public function deactivateToggle()
    {
        if (\Request::ajax())
        {
            $_id = \Input::get('id');
            $_college = \College::whereId($_id)->first();

            $_college->active = $_college->active == 0 ? 1 : 0;
            $_college->save();

            return "success";
        }
    }
}