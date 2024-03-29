<?php

Route::get('/', 'HomeController@index')->name('home');

Route::prefix('laravel-modules')->group(function () {

    Route::get('/', function () {
        return redirect('laravel-modules/v9/introduction');
    });

    Route::get('/v1', function () {
        return redirect('laravel-modules/v1/introduction');
    });

    Route::get('/v2', function () {
        return redirect('laravel-modules/v2/introduction');
    });

    Route::get('/v3', function () {
        return redirect('laravel-modules/v3/introduction');
    });

    Route::get('/v4', function () {
        return redirect('laravel-modules/v4/introduction');
    });

    Route::get('/v5', function () {
        return redirect('laravel-modules/v5/introduction');
    });

    Route::get('/v6', function () {
        return redirect('laravel-modules/v6/introduction');
    });

    Route::get('/v8', function () {
        return redirect('laravel-modules/v8/introduction');
    });

    Route::get('/v9', function () {
        return redirect('laravel-modules/v9/introduction');
    });
});

Route::prefix('laravel-menus')->group(function () {

    Route::get('/', function () {
        return redirect('laravel-menus/v1/introduction');
    });
    Route::get('/v1', function () {
        return redirect('laravel-menus/v1/introduction');
    });
    Route::get('/v0.5', function () {
        return redirect('laravel-menus/v0.5/introduction');
    });
});

Route::prefix('laravel-videoable')->group(function () {

    Route::get('/', function () {
        return redirect('laravel-videoable/v1/introduction');
    });
});

Route::get('{slug}/edit', 'PageController@edit')->where('slug', '(.*)');
Route::get('{slug}', 'PageController@page')->where('slug', '(.*)');
