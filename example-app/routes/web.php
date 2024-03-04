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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/abc/{name}', function ($name) {
//     return "Xin Chao " .$name;
// });
// Route::get('/cba/{name?}', function ($name="a cha cha") {
//     return "Xin Chao " .$name;
// });
// Route::get('/trangchu', function () {
//     return view('trangchu');
// });
// Route::get('/lienhe', function () {
//     return view('lienhe');
// });
// Route::get('/gioithieu', function () {
//     return view('gioithieu');
// });
// Route::get('/sanpham', function () {
//     return view('sanpham');
// });

Route::get('/{name?}', function ($name="welcome") {
    return view($name);
});