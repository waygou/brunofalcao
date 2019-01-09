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

/*
Route::get('/', function () {
    return view('website::welcome');
});
*/

Route::get(
    '/',
    '\Waygou\BrunoFalcao\Features\Homepage\Controllers\HomepageController@index'
)->name('homepage.index');

Route::get(
    'blog-single',
    '\Waygou\BrunoFalcao\Features\BlogSingle\Controllers\BlogSingleController@show'
)->name('blog-single.show');