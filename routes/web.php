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
        $data = [ 'images' => [
            [
                'path'=> 'data/images/gallery/about.webp', 'alt' => 'gallery', 'id' => 1,
            ],
            [
                'path'=> '/data/images/gallery/2/5.jpg', 'alt' => 'gallery', 'id' => 2,
            ],
            [
                'path'=> '/data/images/gallery/3/1.jpg', 'alt' => 'gallery', 'id' => 3,
            ],
            [
                'path'=> '/data/images/gallery/4/3.jpg', 'alt' => 'gallery', 'id' => 4,
            ],
            [
                'path'=> '/data/images/gallery/5/3.jpg', 'alt' => 'gallery', 'id' => 5,
            ],
            [
                'path'=> '/data/images/gallery/6/1.jpg', 'alt' => 'gallery', 'id' => 6,
            ],
        ]];

        return view('gallery', $data);
    });
    Route::get('/services/{service}', [\App\Http\Controllers\ServiceController::class, 'show']);
    Route::get('/services', function () {
        return view('services');
    });
});

