<?php

use Illuminate\Support\Facades\Route;
Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function() {
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/about', function () {
        return view('about');
    });
    Route::get('/gallery', function () {
        return view('gallery');
    });
    Route::get('/services/{service}', [\App\Http\Controllers\ServiceController::class, 'show']);
    Route::get('/services', function () {
        return view('services');
    });
});

