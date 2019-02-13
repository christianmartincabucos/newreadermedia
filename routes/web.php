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

// Auth::routes();
Route::post('subscriber', 'SubscriberController@store')->name('subscriber.store');
Route::post('subscriber/delete', 'SubscriberController@delete')->name('subscriber.delete');

// Route::get('/home', 'HomeController@index')->name('dashboard');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contribute', 'PageController@contribute')->name('contribute');
// Route::get('/services', 'ServicesController@index')->name('services');
Route::get('/screen-adaptation', 'BookToScreenController@index')->name('screen-adaptation');
Route::get('/bookstore-display', 'BookstoreDisplayController@index')->name('bookstore-display');
// Route::get('/to-read-list', 'FeaturedBooksController@index')->name('to-read-list');

Route::get('/blogs', 'BlogsController@index')->name('blogs');
Route::get('/marketing-and-partnership', 'PartnershipController@index')->name('marketing-and-partnership');
Route::get('/press-release', 'PressReleaseController@index')->name('press-release');
Route::get('/author-interview', 'AuthorInterviewController@index')->name('author-interview');
Route::get('/teaser-ads', 'BookTrailerController@index')->name('teaser-ads');
Route::get('/sneak-peek', 'BookTrailerController@sneakpeek')->name('sneak-peek');
Route::get('/sneak-peeks', 'BookTrailerController@list')->name('sneak-peeks');
Route::get('/subscribe', 'SubscriberController@index')->name('subscribe');
Route::get('/subscribe/thankyou', 'SubscriberController@thankyou')->name('subscribe.thankyou');
Route::get('/subscribe/goodbye', 'SubscriberController@goodbye')->name('subscribe.goodbye');

Route::get('/testmail', 'SubscriberController@testmail')->name('testmail');
Route::get('/unsubscribe', 'SubscriberController@unsubscribe')->name('unsubscribe');

// SPOTLIGHTS
Route::get('/spotlight', 'FeaturedAuthorController@index')->name('spotlight');
Route::get('/spotlight/steven-bentley', 'FeaturedAuthorController@featured1')->name('spotlight.steven-bentley');
Route::get('/spotlight/zachary-zeigler', 'FeaturedAuthorController@featured2')->name('spotlight.zachary-zeigler');
Route::get('/spotlight/kristy-kraft', 'FeaturedAuthorController@featured3')->name('spotlight.kristy-kraft');
Route::get('/spotlight/lindy-kerr', 'FeaturedAuthorController@featured4')->name('spotlight.lindy-kerr');
Route::get('/spotlight/charles-campise', 'FeaturedAuthorController@featured5')->name('spotlight.charles-campise');
Route::get('/spotlight/cora-darrah', 'FeaturedAuthorController@featured6')->name('spotlight.cora-darrah');
Route::get('/spotlight/les-klinefelter', 'FeaturedAuthorController@featured7')->name('spotlight.les-klinefelter');
Route::get('/spotlight/mike-mccluskey', 'FeaturedAuthorController@featured8')->name('spotlight.mike-mccluskey');
Route::get('/spotlight/skyelar-nelson', 'FeaturedAuthorController@featured9')->name('spotlight.skyelar-nelson');
Route::get('/spotlight/sharon-brown-keith', 'FeaturedAuthorController@featured10')->name('spotlight.sharon-brown-keith');
Route::get('/spotlight/abid-shakir', 'FeaturedAuthorController@featured11')->name('spotlight.abid-shakir');
Route::get('/spotlight/burt-kempner', 'FeaturedAuthorController@featured12')->name('spotlight.burt-kempner');
Route::get('/spotlight/calvin-moir', 'FeaturedAuthorController@featured13')->name('spotlight.calvin-moir');
Route::get('/spotlight/charles-arnold', 'FeaturedAuthorController@featured14')->name('spotlight.charles-arnold');
Route::get('/spotlight/lawrence-stentzel', 'FeaturedAuthorController@featured15')->name('spotlight.lawrence-stentzel');
Route::get('/spotlight/philip-persinger', 'FeaturedAuthorController@featured16')->name('spotlight.philip-persinger');
Route::get('/spotlight/tom-peavler', 'FeaturedAuthorController@featured17')->name('spotlight.tom-peavler');
Route::get('/spotlight/yvon-bell', 'FeaturedAuthorController@featured18')->name('spotlight.yvon-bell');
Route::get('/spotlight/wendy-sellers', 'FeaturedAuthorController@featured19')->name('spotlight.wendy-sellers');
Route::get('/spotlight/manuel-pelaez', 'FeaturedAuthorController@featured20')->name('spotlight.manuel-pelaez');