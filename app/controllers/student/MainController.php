<?php namespace Student;

class MainController extends \BaseController {

    public function __construct()
    {
        parent::__construct();
        parent::_get_script(__FILE__);
    }

	public function index()
	{
        return \Redirect::route('student-dashboard');
	}

    public function dashboard()
    {
        $user = \Auth::user();

        $student = \Student::whereUserId($user->id)->first();

        $_curriculum = \Curriculum::whereId($student->curriculum_id)->first();

        $enrolledSubjects = $student->enrolledSubjects();

        $this->data['current_subjects_enrolled'] = $enrolledSubjects[$this->school_year_id][$this->semester_id];
        $this->data['page'] = 'Dashboard';
        $this->data['page_descrption_small'] = 'Overview';
        $this->data['page_description'] = 'Home';
        $this->_template_data('student.dashboard');
    }
}