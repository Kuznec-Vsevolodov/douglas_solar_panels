<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user-models', 'ModelsController@index')->name('models');
Route::get('/users', 'AdminController@users')->name('users');
Route::get('/get-users', 'AdminController@getUsers')->name('get-users');
Route::get('/admin-models', 'AdminController@models')->name('admin-models');
Route::get('/add-model', 'ModelsController@addModel')->name('add-model');

Route::get('/edit-model/{id}', 'ModelsController@editUser')->name('edit-user');
Route::get('/get-model-data/{id}', 'ModelsController@getModelData')->name('get-model-data');
Route::get('/get-admin-models', 'AdminController@getModels')->name('get-admin-models');
Route::get('/get-models-list', 'ModelsController@getModelsList')->name('get-models-list');
Route::get('/edit-user-form/{id}', 'AdminController@editUserForm')->name('edit-user-form');


Route::post('/add-new-model', 'ModelsController@addNewModel')->name('add-new-model');
Route::post('/edit-model-data', 'ModelsController@editModelData')->name('edit-model-data');
Route::post('/edit-user', 'AdminController@editUser')->name('edit-user');