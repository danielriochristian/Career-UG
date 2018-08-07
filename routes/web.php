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

Route::get('/','HomeController@index');

// Route::get('/admin','ManageAdminController@index');
// Route::get('/manageadmin','ManageAdminController@index');


//HOME
Route::get('/seeker','registerSeeker@index');
Route::get('/employer','registerEmployer@index');
Route::get('/vacancies','vacanciesController@index');

//login
Route::get('benvenuto', ['as' => 'benvenuto', 'uses' => 'LoginController@index']);
Route::post('/postLogin','LoginController@postLogin');
Route::get('register','RegisterController@getRegis');
Route::post('/addregister','RegisterController@postRegis');
Route::post('/logout','LogoutController@Logout');
Route::get('/auth','authController@getRoot');

/*
|--------------------------------------------------------------------------
| Super Admin
|--------------------------------------------------------------------------
|
*/
//dashboard superadmin
Route::get('admin','ManageAdminController@index');
Route::POST('addPost','ManageAdminController@addPost');
Route::POST('editPost','ManageAdminController@editPost');
Route::POST('deletePost','ManageAdminController@deletePost');
// Route::get('admin','ManageAdminController@index');

//roles
Route::get('roles','ManageRolesController@index');
Route::POST('editPostRoles','ManageRolesController@editPost');


/*
|--------------------------------------------------------------------------
| Manager
|--------------------------------------------------------------------------
|
*/
//dashboard manager
Route::get('manager','ManagerController@index');
Route::POST('addPost','ManageAdminController@addPost');
Route::POST('editPost','ManageAdminController@editPost');
Route::POST('deletePost','ManageAdminController@deletePost');
Route::get('vacancy','ManageVacancyController@index');
Route::get('create','ManageVacancyController@create');

/*
|--------------------------------------------------------------------------
| Crawling
|--------------------------------------------------------------------------
|
*/
