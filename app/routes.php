<?php

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));

Route::get('login', array('as' => 'login', 'uses' => 'AuthController@index'));
Route::post('login', array('as' => 'authenticate', 'uses' => 'AuthController@postAuthenticate'));
Route::get('logout', array('as' => 'logout', 'uses' => 'AuthController@logout'));

// Administrator Routes
Route::get('a', array('before' => 'must_be_administrator', 'as' => 'administrator', 'uses' => 'Administrator\MainController@index'));
Route::get('a/dashboard', array('before' => 'must_be_administrator', 'as' => 'administrator-dashboard', 'uses' => 'Administrator\MainController@dashboard'));
Route::get('a/courses', array('before' => 'must_be_administrator', 'as' => 'administrator-courses', 'uses' => 'Administrator\CoursesController@index'));
Route::post('a/courses/deactivate-toggle', array('before' => 'must_be_administrator', 'as' => 'courses-deactivate-toggle', 'uses' => 'Administrator\CoursesController@deactivateToggle'));
Route::get('a/colleges', array('before' => 'must_be_administrator', 'as' => 'administrator-colleges', 'uses' => 'Administrator\CollegesController@index'));
Route::post('a/colleges/deactivate-toggle', array('before' => 'must_be_administrator', 'as' => 'colleges-deactivate-toggle', 'uses' => 'Administrator\CollegesController@deactivateToggle'));
Route::get('a/curriculums', array('before' => 'must_be_administrator', 'as' => 'administrator-curriculums', 'uses' => 'Administrator\CurriculumsController@index'));
Route::post('a/curriculums/deactivate-toggle', array('before' => 'must_be_administrator', 'as' => 'curriculums-deactivate-toggle', 'uses' => 'Administrator\CurriculumsController@deactivateToggle'));

// Student Routes
Route::get('s', array('before' => 'must_be_student', 'as' => 'student', 'uses' => 'Student\MainController@index'));
Route::get('s/dashboard', array('before' => 'must_be_student', 'as' => 'student-dashboard', 'uses' => 'Student\MainController@dashboard'));
Route::get('s/proposed-list', array('before' => 'must_be_student', 'as' => 'student-proposed-list', 'uses' => 'Student\ProposedListController@index'));

