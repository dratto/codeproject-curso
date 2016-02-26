<?php


Route::get('/', function () {
    return view('welcome');
});

Route::post('/oauth/access_token', function() {
    return Response::json(Authorizer::issueAccessToken());
});
Route::group(['middleware' => 'oauth'], function () {
    Route::resource('client', 'ClientController', ['except' => ['create','edit']]);

    Route::group(['middleware' => 'check-project-owner'], function() {
        Route::resource('project', 'ProjectController',['except' => ['create','edit']]);
    });

    Route::group(['prefix' => 'project'],function() {

        Route::get('{id}/note','ProjectNoteController@index');
        Route::post('{id}/note', 'ProjectController@store');
        Route::get('{id}/note/{noteId}', 'ProjectController@show');
        Route::delete('note/{id}', 'ProjectController@update');
    });
});
