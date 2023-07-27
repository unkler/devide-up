<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

require __DIR__.'/auth.php';

Route::get('/', function () {
    return Auth::check() ? redirect('/employee') : view('landing.top');
});

Route::get('/privacy_policy', function () {
    return Auth::check() ? redirect('/employee') : view('landing.privacy-policy');
});

Route::get('/terms_of_service', function () {
    return Auth::check() ? redirect('/employee') : view('landing.terms-of-service');
});

Route::get('/management', function () {
    return Auth::check() ? redirect('/employee') : view('landing.management');
});

Route::get('/{any?}', function () {
    return Auth::check() ? view('app') : redirect('/login');
})->where('any', '.*');
