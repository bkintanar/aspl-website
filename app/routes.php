<?php

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));

Route::get('login', array('as' => 'login', 'uses' => 'AuthController@index'));
Route::post('login', array('as' => 'authenticate', 'uses' => 'AuthController@postAuthenticate'));
Route::get('logout', array('as' => 'logout', 'uses' => 'AuthController@logout'));

Route::get('dashboard', array('before' => 'auth', 'as' => 'dashboard', 'uses' => 'DashboardController@index'));

Route::get('proposed-list', array('before' => 'auth', 'as' => 'proposed-list', 'uses' => 'ProposedListController@index'));