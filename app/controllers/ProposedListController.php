<?php

class ProposedListController extends BaseController {

    public function __construct()
    {
        parent::__construct();
        parent::_get_script(__FILE__);
    }

	public function index()
	{
        $user = Auth::user();

        $student = Student::whereUserId($user->id)->first();

        $subj = Subject::whereCode('Lit 21')->first();

        $firstYearFirstSem = ($subj->prerequisites());

        $student->getProposedList();

        foreach ($firstYearFirstSem as $key => $value)
        {
            echo $value->code . '<br />';
        }
        die;

        $this->data['page'] = 'Proposed-list';
        $this->data['page_descrption_small'] = 'Auto generated based on student\'s curriculum.';
        $this->data['page_description'] = 'Proposed-list';
        $this->_template_data('proposed-list');
	}
}