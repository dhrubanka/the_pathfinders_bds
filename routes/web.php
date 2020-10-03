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
Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::middleware('guest')->get('/admin', function(){

    return view('admin.login');
})->name('admin');



Route::middleware('can:isAdmin')->namespace('Admin')->group(function () {
    
    Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin-dashboard');
    Route::get('/admin/logout', 'AdminController@logout')->name('admin-logout');

    Route::get('/book', 'BookController@index');
    Route::get('/book/create', 'BookController@create');
    Route::post('/book/store', 'BookController@store');
    Route::get('book/{book}', 'BookController@show');

});


