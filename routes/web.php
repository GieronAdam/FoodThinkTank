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
    return view('welcome');
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');


Route::get('projects', array('as' => 'projects.index', 'uses' => 'ProjectsController@index'));
Route::get('projects/add', array('as' => 'projects.create', 'uses' => 'ProjectsController@create'));
Route::post('projects/store', array('as' => 'projects.store', 'uses' => 'ProjectsController@store'));
Route::get('projects/edit/{id}', array('as' => 'projects.edit', 'uses' => 'ProjectsController@edit'));
Route::patch('projects/update/{id}', array('as' => 'projects.update', 'uses' => 'ProjectsController@update'));
Route::delete('projects/delete/{id}', array('as' => 'projects.destroy', 'uses' => 'ProjectsController@destroy'));
Route::get('projects/{slug}', array('as' => 'projects.show', 'uses' => 'ProjectsController@show'));