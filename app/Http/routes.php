<?php
Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('index');
    });
    
    Route::get('/lorem-ipsum', 'LoremController@getLorem');
    Route::get('/user', 'UserController@getUser');

    # Restrict certain routes to only be viewable in the local environments
    if(App::environment('local')) {
        Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    }

});