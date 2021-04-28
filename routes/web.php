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

Route::get('/', 'HomeController@index')->name('home');

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes(['verify' => true]);

Route::get('/home',                 'HomeController@index')->name('home');
Route::get('/home/{categoryId}',    'HomeController@index')->name('tests_groups_from_category_id');
Route::get('/tests/{groupId}',    'TestsController@test')->name('tests');
