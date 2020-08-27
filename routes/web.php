<?php

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\BlogCategory;
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
Route::group(['middleware' => 'TwoFA'], function(){
    Route::get('/blog/newsletters/{slug}', 'BlogsController@shownewsletters')->name('blog-shownewsletters');
    Route::get('/blogs/newsletters', 'BlogsController@newsletters')->name('blog-newsletters');
    Route::post('/blog/post', 'BlogsController@store')->name('blog.post');
    Route::get('/blogs/reviews', 'TestimonialController@index')->name('reviews');
    Route::get('/blogs', 'BlogsController@index')->name('blogs');
    Route::get('/blog/new-reader-media/{blog}', 'BlogsController@show')->name('blog-show');
    Route::get('/blogs/new-reader-media', 'BlogsController@newreadermedia')->name('blog-nrm');
    Route::get('/blogs/media', 'BlogsController@media')->name('blog-media');
    Route::get('/blogs/media/{slug}', 'BlogsController@mediashow')->name('blog-media-show');
});

Route::group(['middleware' => 'is_admin'], function () {
    Route::get('/administrator', 'AdminController@admin')->name('administrator');
    Route::prefix('administrator')->group(function () {
        Route::get('/users', 'AdminController@adminusers')->name('admin.users');
        Route::get('/media', 'BlogsController@adminmedia')->name('admin.media');
        Route::get('/nmagazine', 'BlogsController@adminnmagazine')->name('admin.nmagazine');
        Route::get('/writingtips', 'BlogsController@adminnwritingtips')->name('admin.writingtips');
        Route::get('/reviews', 'BlogsController@adminreviews')->name('admin.reviews');
        Route::get('/status-reference', 'StatusRefenceController@index')->name('admin.status.reference');
        Route::post('/status-reference', 'StatusRefenceController@store');
        Route::post('/status-reference/{status}', 'StatusRefenceController@update');
        Route::get('/media/{blog}', 'BlogsController@showadminmedia')->name('admin.show');
        Route::post('/approve/{blog}', 'BlogsController@approve')->name('admin.approve');
        Route::post('/updateblog/{blog}', 'BlogsController@updateblog');
        Route::post('/user/update/{user}', 'AdminController@update')->name('user.update');
    });
});

Route::post('getstatus', 'StatusRefenceController@getStatus');
Route::get('getcategory', 'BlogsController@getCategory');
Route::get('getmedia', 'BlogsController@getmedia');
Route::post('getmedia', 'BlogsController@getmedia');
Route::get('/', 'HomeController@index')->name('home');
Route::get('verify' , 'VerifyOTPController@showverifyform');
Route::post('verifyOTP' ,'VerifyOTPController@verify')->name('verifyOTP');
Route::post('resendOTP', 'ResendController@resend')->name('resendOTP');

Auth::routes();
Route::post('subscriber', 'SubscriberController@store')->name('subscriber.store');
Route::post('subscriber/delete', 'SubscriberController@delete')->name('subscriber.delete');

Route::get('/about', 'PageController@about')->name('about');
// Route::get('/contribute', 'PageController@contribute')->name('contribute');
// Route::get('/services', 'ServicesController@index')->name('services');
Route::get('/screen-adaptation', 'BookToScreenController@index')->name('screen-adaptation');
Route::get('/bookstore-display', 'BookstoreDisplayController@index')->name('bookstore-display');
// Route::get('/to-read-list', 'FeaturedBooksController@index')->name('to-read-list');

// Route::get('/administrator', 'AdminController@admin')->name('administrator');
Route::post('tinymce/upload', 'BlogsController@upload')->name('tinymce.upload');

Route::get('/marketing-and-partnership', 'PartnershipController@index')->name('marketing-and-partnership');
Route::get('/press-release', 'PressReleaseController@index')->name('press-release');
Route::get('/author-interview', 'AuthorInterviewController@index')->name('author-interview');
Route::get('/teaser-ads', 'BookTrailerController@index')->name('teaser-ads');
Route::get('/sneak-peek', 'BookTrailerController@sneakpeek')->name('sneak-peek');
Route::get('/sneak-peeks', 'BookTrailerController@list')->name('sneak-peeks');
Route::get('/subscribe', 'SubscriberController@index')->name('subscribe');
Route::get('/subscribe/thankyou', 'SubscriberController@thankyou')->name('subscribe.thankyou');
Route::get('/subscribe/goodbye', 'SubscriberController@goodbye')->name('subscribe.goodbye');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', function(Request $request){
    Mail::send(new ContactMail($request));
    return redirect('/');
});
// Route::get('/testmail', 'SubscriberController@testmail')->name('testmail');
Route::get('/unsubscribe', 'SubscriberController@unsubscribe')->name('unsubscribe');

// SPOTLIGHTS
// Route::get('/spotlight', 'FeaturedAuthorController@index')->name('spotlight');
// Route::get('/spotlight/steven-bentley', 'FeaturedAuthorController@featured1')->name('spotlight.steven-bentley');
// Route::get('/spotlight/zachary-zeigler', 'FeaturedAuthorController@featured2')->name('spotlight.zachary-zeigler');
// Route::get('/spotlight/kristy-kraft', 'FeaturedAuthorController@featured3')->name('spotlight.kristy-kraft');
// Route::get('/spotlight/lindy-kerr', 'FeaturedAuthorController@featured4')->name('spotlight.lindy-kerr');
// Route::get('/spotlight/charles-campise', 'FeaturedAuthorController@featured5')->name('spotlight.charles-campise');
// Route::get('/spotlight/cora-darrah', 'FeaturedAuthorController@featured6')->name('spotlight.cora-darrah');
// Route::get('/spotlight/les-klinefelter', 'FeaturedAuthorController@featured7')->name('spotlight.les-klinefelter');
// Route::get('/spotlight/mike-mccluskey', 'FeaturedAuthorController@featured8')->name('spotlight.mike-mccluskey');
// Route::get('/spotlight/skyelar-nelson', 'FeaturedAuthorController@featured9')->name('spotlight.skyelar-nelson');
// Route::get('/spotlight/sharon-brown-keith', 'FeaturedAuthorController@featured10')->name('spotlight.sharon-brown-keith');
// Route::get('/spotlight/abid-shakir', 'FeaturedAuthorController@featured11')->name('spotlight.abid-shakir');
// Route::get('/spotlight/burt-kempner', 'FeaturedAuthorController@featured12')->name('spotlight.burt-kempner');
// Route::get('/spotlight/calvin-moir', 'FeaturedAuthorController@featured13')->name('spotlight.calvin-moir');
// Route::get('/spotlight/charles-arnold', 'FeaturedAuthorController@featured14')->name('spotlight.charles-arnold');
// Route::get('/spotlight/lawrence-stentzel', 'FeaturedAuthorController@featured15')->name('spotlight.lawrence-stentzel');
// Route::get('/spotlight/philip-persinger', 'FeaturedAuthorController@featured16')->name('spotlight.philip-persinger');
// Route::get('/spotlight/tom-peavler', 'FeaturedAuthorController@featured17')->name('spotlight.tom-peavler');
// Route::get('/spotlight/yvon-bell', 'FeaturedAuthorController@featured18')->name('spotlight.yvon-bell');
// Route::get('/spotlight/wendy-sellers', 'FeaturedAuthorController@featured19')->name('spotlight.wendy-sellers');
// Route::get('/spotlight/manuel-pelaez', 'FeaturedAuthorController@featured20')->name('spotlight.manuel-pelaez');
// Route::get('/spotlight/alex-salaiz', 'FeaturedAuthorController@featured21')->name('spotlight.alex-salaiz');
// Route::get('/spotlight/bernadette-butler', 'FeaturedAuthorController@featured22')->name('spotlight.bernadette-butler');
// Route::get('/spotlight/billy-turlington', 'FeaturedAuthorController@featured23')->name('spotlight.billy-turlington');
// Route::get('/spotlight/charles-glenn', 'FeaturedAuthorController@featured24')->name('spotlight.charles-glenn');
// Route::get('/spotlight/gary-smit', 'FeaturedAuthorController@featured25')->name('spotlight.gary-smit');
// Route::get('/spotlight/jon-howard-hall', 'FeaturedAuthorController@featured26')->name('spotlight.jon-howard-hall');
// Route::get('/spotlight/kay-pratt', 'FeaturedAuthorController@featured27')->name('spotlight.kay-pratt');
// Route::get('/spotlight/kiera-donna-laike', 'FeaturedAuthorController@featured28')->name('spotlight.kiera-donna-laike');
// Route::get('/spotlight/ted-lau', 'FeaturedAuthorController@featured29')->name('spotlight.ted-lau');
// Route::get('/spotlight/walter-tunstall', 'FeaturedAuthorController@featured30')->name('spotlight.walter-tunstall');
// Route::get('/spotlight/cary-green', 'FeaturedAuthorController@featured31')->name('spotlight.cary-green');
// Route::get('/spotlight/clifton-west', 'FeaturedAuthorController@featured32')->name('spotlight.clifton-west');
// Route::get('/spotlight/tyrone-holcomb', 'FeaturedAuthorController@featured33')->name('spotlight.tyrone-holcomb');
// Route::get('/spotlight/richard-jurgensen', 'FeaturedAuthorController@featured34')->name('spotlight.richard-jurgensen');
// Route::get('/spotlight/malaika-horne', 'FeaturedAuthorController@featured35')->name('spotlight.malaika-horne');
// Route::get('/spotlight/bill-sanford', 'FeaturedAuthorController@featured36')->name('spotlight.bill-sanford');


// BLOGS
// Route::get('/blogs/editors-picks', 'EditorsPicksController@index')->name('editors-picks');
// Route::get('/blogs/arts-and-culture', 'ArtsAndCultureController@index')->name('arts-and-culture');

// EDITORS PICKS
// Route::get('/blogs/editors-picks/free-as-my-hair', 'EditorsPicksController@blog1')->name('editors-picks.free-as-my-hair');

// ARTS AND CULTURE
// Route::get('/blogs/arts-and-culture/aphantasia', 'ArtsAndCultureController@blog1')->name('arts-and-culture.aphantasia');
// Route::get('/blogs/arts-and-culture/greatest-cons-in-history', 'ArtsAndCultureController@blog2')->name('arts-and-culture.greatest-cons-in-history');