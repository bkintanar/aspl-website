<?php

class AuthController extends BaseController {

    public function __construct()
    {
        parent::__construct();
        parent::_get_script(__FILE__);
    }

    public function index()
    {
        // Redirect to dashboard if user is logged in
        if (Auth::check())
        {
            return User::redirectToGroupDashboard();
        }

        $this->data['page'] = 'Login';
        $this->data['page_description'] = 'User login page';
        $this->_template_data('login');
    }

    public function postAuthenticate()
    {
        $username_credentials = array(
            'username' => trim(Input::get('username')),
            'password' => trim(Input::get('password')),
            'active' => 1
        );

        if(Auth::attempt($username_credentials))
        {
            return User::redirectToGroupDashboard();
        }

        // authentication failed redirect back with flash_error
        return Redirect::back()->with('flash_error', 'The email or password you entered is incorrect or your account is not active.')->withInput();
    }

    public function logout()
    {
        Auth::logout();

        return Redirect::to('login');
    }
}