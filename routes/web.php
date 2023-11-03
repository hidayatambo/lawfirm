<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/artikel', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/main', function () {
    return view('main');
});
Route::get('/practice', function () {
    return view('practice');
});
Route::get('/single-blog', function () {
    return view('single-blog');
});
Route::get('/elements', function () {
    return view('elements');
});
