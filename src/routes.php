<?php

$attributes = [
    'prefix' => config('panda-admin.prefix'),
    'namespace' => 'PandaAdmin\\Core\\Controllers'
];

Route::group($attributes, function() {
    Route::get('/', 'AdminController@index');

    Route::get('/content/types', 'ContentTypeController@index');

    Route::get('/content/{contenttype}', 'ContentController@index');
    Route::post('/content/{contenttype}', 'ContentController@store');
    Route::put('/content/{contenttype}/{id}', 'ContentController@update');
    Route::delete('/content/{contenttype}/{id}', 'ContentController@delete');
    Route::get('/content/{contenttype}', 'ContentController@index');
});