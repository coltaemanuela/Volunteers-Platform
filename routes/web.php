<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'UserController@index');

//Auth routes:
Route::auth();


//Pages routes:
Route::get('/home', 'PageController@getAbout');
Route::get('/', 'PageController@getAbout');
Route::get('/about', 'PageController@getAbout');
Route::get('/results', 'PageController@getResults');


Route::get('/contact', 'PageController@getContact');
Route::post('/contact', 'PageController@getContact');
// Route::post('/contact/email', 'PageController@getContactEmail');

Route::post('/contact/email', 'PageController@sendEmail');

//users routes:

 Route::get('/user/create', 'UserController@create');
 Route::post('/user/store', 'UserController@store');


Route::resource('user', 'UserController');

//cities routes:
Route::resource('city', 'CityController', ['except'=>['update','edit']]);
Route::get('city/{id}/user/create/', 'UserController@userCityCreate');
