<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/anggota_view', function () {
    return view('anggota_view');
});

Route::get('/devisi_view', function () {
    return view('devisi_view');
});

Route::get('/proker_view', function () {
    return view('proker_view');
});

Route::get('/contact_view', function () {
    return view('contact_view');
});
use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'store']);
