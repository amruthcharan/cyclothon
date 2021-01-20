<?php

Route::get('/cyclothon-21', 'CyclothonController@showForm');
Route::redirect('/', '/cyclothon-21');

Route::redirect('/home', '/admin');

Auth::routes(['register' => false]);
Route::get('cyclothon', 'CyclothonController@index')->name('cyclothon');
Route::post('cyclothon', 'CyclothonController@store')->name('cyclothon.store');
Route::get('cyclothon/{id}', 'CyclothonController@show')->name('cyclothon.show');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

    Route::resource('users', 'UsersController');

    Route::delete('products/destroy', 'ProductsController@massDestroy')->name('products.massDestroy');

    Route::resource('products', 'ProductsController');
});
