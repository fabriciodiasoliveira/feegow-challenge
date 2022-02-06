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
Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/professionals/{id}', 'ProfessionalController@index')->name('professionals.index');
Route::get('/form_schedule/{id}', 'ScheduleController@form')->name('schedule.form');

Auth::routes();
