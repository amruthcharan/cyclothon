<?php

Route::get('/cyclothon-21', 'CyclothonController@showForm');
Route::redirect('/', '/cyclothon-21');

Route::redirect('/home', '/admin');

Auth::routes(['register' => false]);
Route::resource('cyclothon', 'CyclothonController');


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

    Route::resource('users', 'UsersController');

    Route::delete('cyclothon/destroy', 'CyclothonController@massDestroy')->name('cyclothon.massDestroy');

    Route::resource('cyclothon', 'CyclothonController');
    Route::get('cyclothon/{id}/map', 'CyclothonController@map')->name('cyclothon.map');
});
