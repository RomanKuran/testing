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
Route::post('/admin/createCategory',  'Admin\Pages\Categories\CreateCategoryController@createCategory')->middleware(['is_admin'])->name('admin_create_category');
Route::post('/admin/editCategory',  'Admin\Pages\Categories\EditCategoryController@edit')->middleware(['is_admin'])->name('admin_edit_category');

Route::get('/admin/testsGroups',                 'Admin\Pages\TestsGroups\TestsGroupsController@testsGroups')->middleware(['is_admin'])->name('admin_tests_groups');
Route::post('/admin/getTestsGroupsFromCategoryId',                 'Admin\Pages\TestsGroups\TestsGroupsController@testsGroups')->middleware(['is_admin'])->name('get_tests_groups_from_category_id');
Route::post('/admin/testsGroups/create',                 'Admin\Pages\TestsGroups\CreateTestsGroupController@createTestsGroup')->middleware(['is_admin'])->name('admin_create_tests_group');
Route::post('/admin/testsGroups/edit',                 'Admin\Pages\TestsGroups\EditTestsGroupController@editTestsGroup')->middleware(['is_admin'])->name('admin_edit_tests_group');
//Route::post('/admin/testsGroups/getTestsGroupsFromCategoryId',                 'Admin\Pages\TestsGroups\GetTestsGroupsFromCategoryIdController@getTestsGroups')->middleware(['is_admin'])->name('get_tests_groups_from_category_id');
