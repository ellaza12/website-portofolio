<?php

use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('index');
});

Route::resource('pendidikan', PendidikanController::class);
Route::resource('pelatihan', PelatihanController::class);
Route::resource('project', ProjectController::class);