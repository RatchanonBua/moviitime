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
    return view('home'); });
Route::get('/admin/user_list', function () {
    return view('admin'); });
Route::get('/movies/create_movie', function() {
    return view('movie'); });
Route::get('/movies/example_movie', function() {
    return view('review'); });
