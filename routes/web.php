<?php

Route::get('/', function() {
    return redirect()->route('login');
});

Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);
// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Import Leads
    Route::get('imports.create', 'ImportController@create')->name('import.create');
    Route::post('imports.store', 'ImportController@store')->name('import.store');

    // Adult Clients
    Route::delete('adult-clients/destroy', 'AdultClientsController@massDestroy')->name('adult-clients.massDestroy');
    Route::post('adult-clients/media', 'AdultClientsController@storeMedia')->name('adult-clients.storeMedia');
    Route::post('adult-clients/ckmedia', 'AdultClientsController@storeCKEditorImages')->name('adult-clients.storeCKEditorImages');
    Route::resource('adult-clients', 'AdultClientsController');

    // Childlines
    Route::delete('childlines/destroy', 'ChildlineController@massDestroy')->name('childlines.massDestroy');
    Route::post('childlines/media', 'ChildlineController@storeMedia')->name('childlines.storeMedia');
    Route::post('childlines/ckmedia', 'ChildlineController@storeCKEditorImages')->name('childlines.storeCKEditorImages');
    Route::resource('childlines', 'ChildlineController');

    // Non Productives
    Route::delete('non-productives/destroy', 'NonProductiveController@massDestroy')->name('non-productives.massDestroy');
    Route::resource('non-productives', 'NonProductiveController');

    // Reports
//    Route::view('reports', 'admin.reports.index')->name('reports.create');
    Route::get('reports', 'ReportsController@preflight')->name('reports.preflight');
    Route::post('reports/{resource?}', 'ReportsController@index')->name('reports.create');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
    }
});
