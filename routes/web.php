<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home');
});
Route::get('/contacts', function () {
    return view('pages.contacts');
});
Route::get('/blog', function () {
    return view('pages.blog');
});
