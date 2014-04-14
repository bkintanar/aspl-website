<?php

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));

Route::get('login', array('as' => 'login', 'uses' => 'AuthController@index'));
Route::post('login', array('as' => 'authenticate', 'uses' => 'AuthController@postAuthenticate'));
Route::get('logout', array('as' => 'logout', 'uses' => 'AuthController@logout'));

// Administrator Routes
Route::get('a', array('before' => 'auth', 'as' => 'administrator', 'uses' => 'Administrator\MainController@index'));
Route::get('a/dashboard', array('before' => 'auth', 'as' => 'administrator-dashboard', 'uses' => 'Administrator\MainController@dashboard'));
Route::get('a/courses', array('before' => 'auth', 'as' => 'administrator-courses', 'uses' => 'Administrator\CoursesController@index'));
Route::post('a/courses/deactivate-toggle', array('before' => 'auth', 'as' => 'courses-deactivate-toggle', 'uses' => 'Administrator\CoursesController@deactivateToggle'));
Route::get('a/colleges', array('before' => 'auth', 'as' => 'administrator-colleges', 'uses' => 'Administrator\CollegesController@index'));
Route::post('a/colleges/deactivate-toggle', array('before' => 'auth', 'as' => 'colleges-deactivate-toggle', 'uses' => 'Administrator\CollegesController@deactivateToggle'));
Route::get('a/curriculums', array('before' => 'auth', 'as' => 'administrator-curriculums', 'uses' => 'Administrator\CurriculumsController@index'));
Route::post('a/curriculums/deactivate-toggle', array('before' => 'auth', 'as' => 'curriculums-deactivate-toggle', 'uses' => 'Administrator\CurriculumsController@deactivateToggle'));

// Student Routes
Route::get('s', array('before' => 'auth', 'as' => 'student', 'uses' => 'Student\MainController@index'));
Route::get('s/dashboard', array('before' => 'auth', 'as' => 'student-dashboard', 'uses' => 'Student\MainController@dashboard'));
Route::get('s/proposed-list', array('before' => 'auth', 'as' => 'student-proposed-list', 'uses' => 'Student\ProposedListController@index'));

