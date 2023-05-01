<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcom', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/documents', function () {
    return view('documents');
});
Route::get('/eservice', function () {
    return view('e-services');
});
Route::get('/entry', function () {
    return view('entry');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/events/{id}', function () {
    return view('event_detail');
});
Route::get('/info', function () {
    return view('info');
});
Route::get('/ita', function () {
    return view('ita');
});
Route::get('/laws', function () {
    return view('laws');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/news/{id}', function () {
    return view('news_detail');
});
Route::get('/policy', function () {
    return view('policy');
});
Route::get('/policy/{id}', function () {
    return view('policy_detail');
});
Route::get('/struct', function () {
    return view('struct');
});
Route::get('/travel', function () {
    return view('travel');
});
Route::get('/power', function () {
    return view('power');
});
