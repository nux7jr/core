<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home');
});
Route::get('/contacts', function () {
    return view('pages.contacts');
});
Route::get('/blog', function () {
    return view('pages.blog.blog');
});
Route::get('/blog/{slug}', function () {
    return view('pages.blog.slug');
});
Route::get('/style', function () {
    return view('pages.style');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/overview', function () {
    return view('pages.overview');
});
