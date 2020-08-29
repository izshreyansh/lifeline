<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Adult Clients
    Route::post('adult-clients/media', 'AdultClientsApiController@storeMedia')->name('adult-clients.storeMedia');
    Route::apiResource('adult-clients', 'AdultClientsApiController');

    // Childlines
    Route::post('childlines/media', 'ChildlineApiController@storeMedia')->name('childlines.storeMedia');
    Route::apiResource('childlines', 'ChildlineApiController');

    // Non Productives
    Route::apiResource('non-productives', 'NonProductiveApiController');
});
