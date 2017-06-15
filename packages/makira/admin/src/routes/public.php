<?php
Route::group([
    'namespace' => 'Http\Auth'
], function(){
    Route::get('/', function(){
        if(!\Sentinel::check()){
            return redirect(route('admin::auth.login'));
        }
        // return redirect(route('admin::dashboard'));
    });

    Route::get('/auth/login', [
        'as' => 'admin::auth.login',
        'uses' => 'AuthController@login'
    ]);

    Route::post('/auth/login', [
        'as' => 'admin::auth.authenticate',
        'uses' => 'AuthController@authenticate'
    ]);

    Route::get('/auth/logout', [
        'as' => 'admin::auth.logout',
        'uses' => 'AuthController@logout'
    ]);

    // Route::get('/auth/lost-password', [
    //     'as' => 'admin::auth.lost-password',
    //     'uses' => 'ReminderController@lostPassword'
    // ]);

    // Route::post('/auth/lost-password', [
    //     'as' => 'admin::auth.reset-password',
    //     'uses' => 'ReminderController@sendResetToken'
    // ]);

    // Route::get('/auth/new-password/{token}', [
    //     'as' => 'admin::auth.new-password',
    //     'uses' => 'ReminderController@setNewPassword'
    // ]);

    // Route::post('/auth/new-password/{token}', [
    //     'uses' => 'ReminderController@saveNewPassword'
    // ]);

    // Route::get('/auth/request-activation', [
    //     'as' => 'admin::auth.request-activation',
    //     'uses' => 'ActivationController@request'
    // ]);

    // Route::post('/auth/request-activation', [
    //     'uses' => 'ActivationController@sendActivation'
    // ]);

    // Route::get('/auth/activate/{token}', [
    //     'as' => 'admin::auth.account-activation',
    //     'uses' => 'ActivationController@activation'
    // ]);

    // Route::post('/auth/activate', [
    //     'as' => 'admin::auth.activate-account',
    //     'uses' => 'ActivationController@activate'
    // ]);
});