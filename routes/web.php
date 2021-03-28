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
Route::get('/contact','ContactController@contacter')->name('contact');
Route::Post('/contact','ContactController@save_contact')->name('save_contact');
Route::get('/list_contact','ContactController@list_contact')->name('list_contact');
Route::get('/test/{x}/{y}','IndexController@test');
Route::get('/list_students','StudentsController@list_students')->name('list_students');
Route::get('/contact/delete/{id}','ContactController@delete_contact')->name('delete_contact');
Route::get('/contact/edit_contact/{id}','ContactController@modifier_contact')->name('modifier_contact');
Route::Post('/contact/edit_contact','ContactController@save_modification_contact')->name('save_modification_contact');
Route::get('/mytest','MythemeController@opentheme')->name('mytest');


