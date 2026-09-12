<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::controller(LandingPageController::class)->group(function () {
    Route::get('/', 'index')->name('landingpage');
    Route::get('/services', 'services')->name('services');
    Route::get('/about', 'about')->name('about');
    Route::get('/article', 'article')->name('article');
    Route::get('/article/search', 'articleSearch')->name('artikelSearch');
    Route::get('/article/{slug}', 'articleDetail')->name('articleDetail');
});

Route::get('/linkstorage', function () {
    \Artisan::call('storage:link');
});
