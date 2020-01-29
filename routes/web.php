<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('search/','PeopleController@search');

Route::resource('people','PeopleController');
