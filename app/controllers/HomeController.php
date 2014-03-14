<?php

class HomeController extends BaseController {

    public function __construct()
    {
        parent::__construct();
        parent::_get_script(__FILE__);
    }

    public function index()
    {
        return Redirect::route('login');
    }
}