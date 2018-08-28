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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PageController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('dashboard');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contribute', 'PageController@contribute')->name('contribute');
Route::get('/services', 'ServicesController@index')->name('services');
Route::get('/screen-adaptation', 'BookToScreenController@index')->name('screen-adaptation');
Route::get('/bookstore-display', 'BookstoreDisplayController@index')->name('bookstore-display');
Route::get('/to-read-list', 'FeaturedBooksController@index')->name('to-read-list');
Route::get('/featured-client', 'FeaturedAuthorController@index')->name('featured-client');
Route::get('/blogs', 'BlogsController@index')->name('blogs');
Route::get('/marketing-and-partnership', 'PartnershipController@index')->name('marketing-and-partnership');
Route::get('/press-release', 'PressReleaseController@index')->name('press-release');
Route::get('/author-interview', 'AuthorInterviewController@index')->name('author-interview');
Route::get('/teaser-ads', 'BookTrailerController@index')->name('teaser-ads');