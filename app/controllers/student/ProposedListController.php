<?php namespace Student;

class ProposedListController extends \BaseController {

    public function __construct()
    {
        parent::__construct();
        parent::_get_script(__FILE__);
    }

	public function index()
	{
        $user = \Auth::user();

        $student = \Student::whereUserId($user->id)->first();

        $this->data['page'] = 'Proposed-list';
        $this->data['proposed_list'] = $student->getProposedList();
        $this->data['page_descrption_small'] = 'Auto generated based on student\'s curriculum.';
        $this->data['page_description'] = 'Proposed-list';
        $this->_template_data('student.proposed-list');
	}
}