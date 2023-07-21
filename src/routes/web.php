<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

require __DIR__.'/auth.php';


Route::get('/', function () {
    return Auth::check() ? redirect('/employee') : view('landing');
});

Route::get('/{any?}', function () {
    return Auth::check() ? view('app') : redirect('/login');
})->where('any', '.*');
