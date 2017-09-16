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


Route::get('/', 'HomeController@index');
Route::resource('/events', 'EventsController');
Route::resource('/eventusers','EventUsersController');
Route::resource('/users', 'UsersController');

Auth::routes();

Route::get('projects', array('as' => 'projects.index', 'uses' => 'ProjectsController@index'));
Route::get('peoples', array('as' => 'peoples.index', 'uses' => 'ProjectsController@index'));
Route::get('additional_activities', array('as' => 'additional_activities.index', 'uses' => 'ProjectsController@index'));
Route::get('initiative', array('as' => 'initiative.index', 'uses' => 'ProjectsController@index'));
Route::get('lab', array('as' => 'lab.index', 'uses' => 'ProjectsController@index'));
Route::get('contact', array('as' => 'contact.index', 'uses' => 'ProjectsController@index'));
Route::get('admin/add', array('as' => 'admin.create', 'uses' => 'ProjectsController@create'));
Route::post('admin/store', array('as' => 'admin.store', 'uses' => 'ProjectsController@store'));
Route::get('projects/edit/{id}', array('as' => 'projects.edit', 'uses' => 'ProjectsController@edit'));
Route::patch('projects/update/{id}', array('as' => 'projects.update', 'uses' => 'ProjectsController@update'));
Route::delete('projects/delete/{id}', array('as' => 'projects.destroy', 'uses' => 'ProjectsController@destroy'));
Route::get('projects/{slug}', array('as' => 'projects.show', 'uses' => 'ProjectsController@show'));



Route::group(['middleware' => 'admin'], function(){

    Route::get('admin/', 'AdminHomeController@index');
    Route::resource('admin/users', 'AdminUsersController');
    Route::resource('admin/posts', 'AdminPostsController');
    Route::resource('admin/categories', 'AdminCategoriesController');
    Route::resource('admin/media', 'AdminMediaController');
    Route::resource('admin/events', 'AdminEventsController');
    Route::get('admin/media/upload', ['as' => 'admin.media.upload', 'uses' => 'AdminMediaController@upload']);

});

