<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

Route::get('/', function () {
    return view('portfolio.index');
});

Route::get('/projects', function () {
    return view('portfolio.projects');
});

Route::get('/resume', function () {
    return view('portfolio.resume');
});

Route::get('/search', [SearchController::class, 'index']
)->name('search');
