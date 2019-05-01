<?php

// Route::get('/', function () {
//     return view('welcome');});
Route::get('/', 'CharacterController@index');

Route::get('/houses', 'HouseController@index');

Route::get('/signup','SignUpController@index');
Route::post('/signup','SignUpController@signup');

Route::get('/logout','LoginController@logout');
Route::get('/login','LoginController@index');
Route::post('/login','LoginController@login');

Route::middleware(['authenticated'])->group(function(){
    Route::get('/profile', 'AdminController@index');
    Route::get('/characters/new','CharacterController@create');
    Route::post('/', 'CharacterController@store');
});