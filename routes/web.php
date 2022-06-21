<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});



//admin login
Route::get('/admin-login', 'AdminController@index')->name('admin-login');
//admin Dashboard
Route::get('/dashboard', 'AdminController@show_dashboard');
//
Route::post('/dashboard','AdminController@login')->name('login');
//admin logout
Route::get('/admin-logout', 'AdminController@logout');

//profile
Route::get('/profile', 'UserController@index')->name('viewProfile');
//declaration
Route::get('/declaration', 'AdminController@show_declaration');












Route::post('/filter-by-date3', 'AdminController@filter_by_date3');
Route::post('/filter-by-date1', 'AdminController@filter_by_date1');

//Medical declaration
Route::get('/medicalManagement', 'Admin\MedicalDeclarationController@index');

//Account management
Route::get('/accountManagement', 'Admin\AccountController@index')->name('accountManagement');
Route::post('/accountManagement', 'Admin\AccountController@addAccountAdmin')->name('accountManagement.addAccountAdmin');
Route::get('/accountManagement/{id}', 'Admin\AccountController@deleteAccountAdmin')->name('deleteAccountAdmin');

Route::resource('/domesticGuest', 'DomesticGuestController');

Route::get('/statistic','AdminController@show_statistic')->name('statistic');

Route::get('search', 'AdminController@getSearch');
Route::post('search', 'AdminController@action')->name('search');
