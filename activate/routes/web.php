<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;

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



