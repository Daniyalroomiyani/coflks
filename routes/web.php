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

//Route::get('/', function () {
//    return view('front.mainPage');
//});


Route::namespace('App\Http\Controllers\front')->group(function () {
//main page

//    Route::get('/error' ,'HomeController@error')->name('errorPage');

    Route::get('/', 'HomeController@index')->name('index_home');

//    Route::post('/', 'HomeController@search')->name('index_home_search');
//
//
//    Route::post('/subscribe', 'subscribecontroller@add')->name('index_home_subscribe');
//

//    Route::post('/searchValidation', 'HomeController@searchValidation')->name('index_home_search.ajaxVal');

//    //contacts
//    Route::get('/contactus', 'ContacController@contactus')->name('contactus');
//    Route::post('/contactus', 'ContacController@contact_save')->name('contactus_save');
//    //Route::get('/thanks' , 'ContacController@thanks')->name('thanks');
//
//    //Feeds(blog)
//    Route::prefix('blog')->group(function () {
//        Route::get('/', 'FeedController@index')->name('feed_list_front');
//        Route::get('/{id}', 'FeedController@show_post')->name('feed_show_post');
//
//        //category
//        Route::prefix('category')->group(function () {
//            Route::get('/{id}', 'FeedController@Show_category_post')->name('feed_Show_category_post');
//
//        });
//
//
//    });
//
//
//    //branches
//    Route::prefix('branch')->group(function () {
//        Route::get('/', 'BranchCotroller@index')->name('branch_list_front');
//        Route::get('/{id}', 'BranchCotroller@show_post')->name('branch_show_post');
//    });
//
//    //BoardGames -disabled
////    Route::prefix('boardgame')->group(function () {
////        Route::get('/', 'BoardGamecontroller@index')->name('BoardGame_list_front');
////        Route::get('/{id}', 'BoardGamecontroller@show_post')->name('BoardGame_show_post');
////    });
//
//
//    //Escape_room
//    Route::prefix('escape_room')->group(function () {
//        Route::get('/', 'escape_roomcontroller@index')->name('escape_room_list_front');
//        Route::get('/{id}', 'escape_roomcontroller@show_post')->name('escape_room_show_post');
//        Route::get('/branch/{id}', 'escape_roomcontroller@show_posts_branch')->name('escape_room_show_posts_branch');
//
//        //Reserve
//        Route::prefix('reserve')->group(function (){
//            Route::get('/{id}', 'ReserveContoller@Reserve')->name('escape_room_Reserve_Front');
//            Route::post('/{id}', 'ReserveContoller@Do_Reserve')->name('escape_room_Do_Reserve_Front');
//            Route::post('/check/day', 'ReserveContoller@checkday')->name('checkday_escape_room_Reserve_Front');
//            Route::get('/Factor/{id}', 'ReserveContoller@GetFactor')->name('GetFactor_escape_room_Reserve_Front');
//
//        });
//        //Payments
//        Route::prefix('Payments')->group(function (){
//
//            Route::get('/pay/{id}', 'PaymentsController@pay')->name('pay_escape_room_Reserve_Front');
//            Route::get('/callback/{item}', 'PaymentsController@paymentcallback')->name('paymentcallback_escape_room_Reserve_Front');
////            Route::get('/result', 'PaymentsController@ShowResult')->name('result_escape_room_Reserve_Front');
//        });
//
//
//        //theme
//        Route::prefix('theme')->group(function () {
//            Route::get('/{id}', 'escape_roomcontroller@Show_theme_post')->name('escape_room_Show_theme_post');
//
//        });
//
//
//    });

    //shop
    Route::prefix('shop')->group(function () {

        //products
        Route::prefix('product')->group(function (){
            Route::get('/', 'productscontroller@index')->name('Product.front.index');
//            Route::get('/{id}', 'productscontroller@show_post')->name('product.front.post');
//            //category
//            Route::prefix('category')->group(function () {
//                Route::get('/{id}', 'productscontroller@Show_category_post')->name('product.front.post.cats');
//
//            });
        });
//        //orders
//        Route::prefix('order')->group(function (){
//            Route::get('/{id}', 'orderscontroller@buy')->name('shop.front.buy');
//            Route::post('/{id}', 'orderscontroller@do_buy')->name('shop.front.do.buy');
////            Route::group('/{id}', 'orderscontroller@do_buy')->name('front.shop.payment');
//            Route::get('/Factor/{id}', 'orderscontroller@GetFactor')->name('GetFactor_order_Front');
//
//        });
//        //payments
//        Route::prefix('pay')->group(function (){
//            Route::get('/{id}', 'PaymentOrder@pay')->name('shop.front.buy.pay');
//            Route::get('result/{item}', 'PaymentOrder@result')->name('shop.front.do.buy.result');
////            Route::group('/{id}', 'orderscontroller@do_buy')->name('front.shop.payment');
//
//        });


    });

    //FAQ
    Route::prefix('FAQ')->group(function () {

        Route::get('/', 'FAQController@index')->name('FAQ.front.index');
        Route::get('/{id}', 'FAQController@show_post')->name('FAQ.front.post');




    });


});

