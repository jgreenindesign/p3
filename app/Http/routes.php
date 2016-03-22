<?php
Route::group(['middleware' => ['web']], function () 
{
    Route::get('/', function () {
        return view('index');
    });
    
    # Main page routes
    Route::get('/lorem-ipsum', 'LoremController@getLoremPage');
    Route::get('/user', 'UserController@getUser');
    Route::get('/password', 'PasswordGenController@getPassword');

    # Content generation page routes
    Route::post('/lorem-ipsum', 'LoremController@postLoremText');
    Route::post('/user', 'UserController@postUsers');
    Route::post('/password', 'PasswordGenController@postPassword');

    # Restrict certain routes to only be viewable in the local environments
    if(App::environment('local')) {
        Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    }

});