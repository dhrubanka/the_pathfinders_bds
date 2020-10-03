<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something grea!
|
*/

Route::get('/', "HomeController@index");
//Home Controls
Route::get('/home', "HomeController@index");
Route::get('/home/{id}/book' , "HomeController@bookDetails")->name('book-detail');

//Profile Control
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/profile/address/create', 'ProfileController@addressCreate')->name('profile-address');
Route::post('/ProfileController/address/store', 'ProfileController@addressStore');
Route::post('/Profile/request/store', 'ProfileController@requestStore');

Auth::routes();//Authentication

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

    //ordercontroll
    Route::get('/order_index', 'OrderController@index')->name('orderIndex');
    

});


//feedback controller oruter
Route::resource('feedbacks', 'FeedbackController');
//Route::get('/feedbacks', 'FeedbackController@index');
//Route::get('/feedbacks/{feedback}', 'FeedbackController@show');






