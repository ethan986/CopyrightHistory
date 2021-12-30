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
    return view('pages/home');
});

Route::get('/FAQ', function(){
    return view('pages/FAQ');
});
Route::get('/editorial-board',function(){
    return view('pages/editorial_board');
});
Route::get('/news', function(){
    return view('pages/news');
});
Route::get('/acknowledgements', function(){
    return view('pages/acknowledgements');
});
Route::get('/digital-archive', function(){
    return view('pages/digital_archive');
});
Route::get('/contact',function(){
    return view('pages/contact');
});
Route::get('/admin',function(){
    return view('pages/admin');
});