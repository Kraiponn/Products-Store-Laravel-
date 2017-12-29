<?php

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
    return view('home');
});

Route::get('ltest', function () {
    return view('products.ltest');
});

Route::resource('products', 'ProductController');
Route::get('products/create', 'ProductController@create');
// Route::get('products/delete/{id}', 'ProductController@delete');
Route::get('products/delete/{id}', 'ProductController@delete');

Route::resource('/projects', 'ProjectController');
Route::get('projects/create', 'ProjectController@create');
Route::get('projects/delete/{id}', 'ProjectController@delete');
