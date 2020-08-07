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
    return view('welcome');
});


Route::get('/Homework5', 'Homework5Controller@Homework5');

Route::get('/alarm', function () {
    return view('alarm');
});

Route::get('/barchart', function () {
    return view('barchart');
});

Route::get('/linechart', function () {
    return view('linechart');
});

Route::get('/piechart', function () {
    return view('piechart');
});