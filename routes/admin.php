<?php


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/


Route::get('/admin',                 'Admin\AdminController@categories')->middleware(['is_admin'])->name('admin');
Route::post('/admin/createCategory',  'Admin\Pages\Categories\CreateCategoryController@createController')->middleware(['is_admin'])->name('admin_create_category');
Route::post('/admin/editCategory',  'Admin\Pages\Categories\EditCategoryController@edit')->middleware(['is_admin'])->name('admin_edit_category');

