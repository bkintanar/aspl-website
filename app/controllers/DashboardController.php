<?php

class DashboardController extends BaseController {

    public function __construct()
    {
        parent::__construct();
        parent::_get_script(__FILE__);
    }

	public function index()
	{
        $user = Auth::user();

        $student = Student::whereUserId($user->id)->first();

        $_curriculum = Curriculum::whereId($student->curriculum_id)->first();

        $enroled_subjects = $student->enrolledSubjects();


//        print_r($student->curriculum_id);die;

//        $data_r = $_curriculum->data();
////
//        $firstYearFirstSem = $_curriculum->getSubjectsByYearAndSemester(4, 2);
////
//        foreach ($firstYearFirstSem as $key => $value)
//        {
//            echo $value['subject'] . '<br />';
//        }
//die;
        $enrolledSubjects = $student->enrolledSubjects();

        $this->data['current_subjects_enrolled'] = $enrolledSubjects[$this->school_year_id][$this->semester_id];
        $this->data['page'] = 'Dashboard';
        $this->data['page_descrption_small'] = 'Overview';
        $this->data['page_description'] = 'Home';
        $this->_template_data('dashboard');
	}
}