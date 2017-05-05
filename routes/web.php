<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::match(['get', 'post'],'profile','PorfileController@GetUserInfo');
Route::match(['get','post'],'Companyinfo','CompanyController@index');


Route::match(['get','post'],'Companystore','CompanystoreController@index');
Route::post('/storeinfor','StudentController@index');
Route::post('jobs/add','CompanyController@storeJob');
Route::post('user/agree','CompanyController@agreeUser');
