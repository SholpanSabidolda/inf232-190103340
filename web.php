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


Route::get('/test', function () {
    return view('Sabidolda Sholpan');
});
Route::get('/route-example{age}', function () {
    return view(' Sholpan');
});
Route::get('/post/{id}/{age?}', function ($id,$age="13") {
    return "Your id is ".$id." Your age is ".$age;
});
Route::get('/post/surname}/{name}', function ($surname,$name) {
    return "Your id is ".$name." Your age is ".$surname;
});

