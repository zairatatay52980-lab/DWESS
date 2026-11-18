<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
use App\Http\COntrollers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/zaira', function() {
    return "Holaa Zairaaaa";
});

Route::get('/about.blade', function(){
    return view('about');
});

Route::get('/about.blade', function(){
    return view('about', ['nombre' => 'ACTIVATE']);
});

Route::get('/about/{nombre}', function (string $nombre){
    return view('about', ['nombre' => $nombre]);
});

Route::get('/activities', [ActivityController::class, 'index'])
    ->name('activities.index');


Route::get('/activities/{id}', [ActivityController::class, 'show'])
    ->name('activities.show');

Route::get('/categories/{slug}', [CategoryController::class, 'show'])
->where('slug', '[a-z-]+')
    ->name('categories.show');

Route::get('/activities', [ActivityController::class, 'index']);

Route::view('/about', 'about')->name('about');

