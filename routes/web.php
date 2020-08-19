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

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/result', function () {
    return view('result');
});
Route::get('/winner', function () {
    return view('winner');
});
Route::get('/history', function () {
    return view('history');
});
Route::get('/play', function () {
    return view('play');
});

Auth::routes();

Route::get('/welcome', 'HomeController@index');
Route::get('/', 'ProductController@index');
Route::get('/active', 'ProductController@getActiveProducts');

Route::middleware('auth')->group(function () {
    Route::get('/product/{id}', 'ProductController@show');

    Route::get('/account', 'AccountController@showUserData');
    Route::post('/account/update', 'AccountController@updateAccount');

    Route::post('/address', 'ShippingController@store');

    Route::post('/competition', 'CompetitionController@userEnterCompetition');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
