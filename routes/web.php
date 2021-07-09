<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CompetitionController;

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
Route::get('/play', function () {
    return view('play');
});

//authentication
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();

Route::get('/', 'ProductController@index');
Route::post('contact', [ContactController::class, 'store']);
Route::get('/active', 'ProductController@getActiveProducts');

Route::middleware('auth')->group(function () {
    Route::get('/product/{id}', 'ProductController@show');    

    Route::post('/account', 'AccountController@store');
    Route::post('/account/{account}', 'AccountController@update');

    Route::post('/address', 'ShippingController@store');
    Route::get('success/{uuid}', [PaypalController::class, 'indexSuccess']);
    Route::get('cancel', [PaypalController::class, 'indexCancel']);

    Route::post('cart', [CompetitionController::class, 'userEnterCompetition']);
    Route::get('cart', [CartController::class, 'index']);
    Route::get('checkout', [CartController::class, 'accountInformation']);
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
