<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes(['verify' => true]);
Route::middleware(['verified']) ->group(function () {
    Route::get('/', 'HomeController@index')->name('welcome');
});

