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
    return view('layout.layout');
});

Route::get('about', 'about\AboutController@aboutIndex')->name('about');
Route::get('booking', 'booking\BookingController@bookingIndex')->name('booking');
Route::get('contact', 'contact\ContactController@contactIndex')->name('contact');
Route::get('destination', 'destination\DestinationController@destinationIndex')->name('destination');
Route::get('discount', 'discount\DiscountController@discountIndex')->name('discount');

Route::prefix('blog')->group(function () {
    Route::get('/', 'posts\PostsController@getAllPost')->name('blog');
    Route::get('/detail/{id}', 'posts\PostDetailController@')->name('detail');
});
Route::get('lang/{lang}', 'LangController@changeLang')->name('lang');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
