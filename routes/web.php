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

    Route::get('/', 'HomeController@index')->name('index_home');
    Route::post('/comment', 'commentController@save')->name('save_comment');


    Route::prefix('blog')->group(function () {
        Route::get('/', 'blogController@index')->name('feed_list_front');
//        Route::get('/{id}', 'FeedController@show_post')->name('feed_show_post');

//        //category
//        Route::prefix('category')->group(function () {
//            Route::get('/{id}', 'FeedController@Show_category_post')->name('feed_Show_category_post');
//
//        });


    });



    //shop
    Route::prefix('shop')->group(function () {

        //products
        Route::prefix('product')->group(function (){
            Route::get('/', 'productscontroller@index')->name('Product.front.index');
            Route::get('/{id}', 'productscontroller@show_post')->name('product.front.post');
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





//Back_End ==>

Route::get('/login', 'App\Http\Controllers\admin\adminController@login')->name('login');
Route::get('/page403', 'App\Http\Controllers\admin\adminController@page403')->name('403');
Route::post('/login', 'App\Http\Controllers\admin\adminController@Dologin')->name('do_login');
// Route::get('/register', 'App\Http\Controllers\admin\adminController@register_temp');
// Route::post('/register', 'App\Http\Controllers\admin\adminController@Doregister_temp');



Route::prefix('panel')->middleware("guest")->group(function () {

//User-->
    Route::namespace('App\Http\Controllers\admin')->group(function () {
        Route::get('/register', 'adminController@register')->name('register');
        Route::post('/register', 'adminController@Doregister')->name('do_register');
        Route::get('/userlist', 'adminController@userlist')->name('userlist');
        Route::get('/delete{id}', 'adminController@delete')->name('delete');
        Route::get('/edit{id}', 'adminController@edit')->name('edit');
        Route::post('/edit{id}', 'adminController@save')->name('save');

    });

    //-->Dashboard
    Route::namespace('App\Http\Controllers\admin')->group(function () {
        Route::get('/', 'DashboardController@index')->name('home');
        Route::get('/logout', 'adminController@logout')->name('logout');


    });

//BoardGames-disabled
    //  Route::namespace('App\Http\Controllers\admin')->prefix('boardgame')->group(function () {
//
//        Route::get('/', 'BoardGamecontroller@index')->name('list_board_game');
//        Route::get('/add', 'BoardGamecontroller@add')->name('add_board_game');
//        Route::post('/add', 'BoardGamecontroller@save')->name('save_board_game');
//        Route::get('/edit{id}', 'BoardGamecontroller@edit')->name('edit_board_game');
//        Route::post('/edit{id}', 'BoardGamecontroller@edit_save')->name('edit_save_board_game');
//        Route::get('/del{id}', 'BoardGamecontroller@del')->name('del_board_game');
//
//
//    });


////Abouts
//    Route::namespace('App\Http\Controllers\admin')->prefix('about')->group(function () {
//
////     // for init
////    Route::get('/add','Aboutcontriller@add')->name('add_board_game');
////    Route::post('/add','Aboutcontriller@save')->name('save_board_game');
//
//        Route::get('/', 'Aboutcontriller@index')->name('list_abouts');
//        Route::get('/edit/{id}', 'Aboutcontriller@edit')->name('edit_about');
//        Route::post('/edit/{id}', 'Aboutcontriller@edit_save')->name('edit_save_about');
//    });
////Branch
//    Route::namespace('App\Http\Controllers\admin')->middleware("admin")->prefix('branch')->group(function () {
//
//        Route::get('/', 'Branchcontroller@index')->name('list_branch');
//        Route::get('/add', 'Branchcontroller@add')->name('add_branch');
//        Route::post('/add', 'Branchcontroller@save')->name('save_branch');
//        Route::get('/edit{id}', 'Branchcontroller@edit')->name('edit_branch');
//        Route::post('/edit{id}', 'Branchcontroller@edit_save')->name('edit_save_branch');
//        Route::get('/del{id}', 'Branchcontroller@del')->name('del_branch');
//
//
//    });
////cafe
//    Route::namespace('App\Http\Controllers\admin')->prefix('cafe')->group(function () {
//
//        Route::get('/', 'Cafecontroller@index')->name('list_Cafe');
//        Route::get('/add', 'Cafecontroller@add')->name('add_Cafe');
//        Route::post('/add', 'Cafecontroller@save')->name('save_Cafe');
//        Route::get('/edit{id}', 'Cafecontroller@edit')->name('edit_Cafe');
//        Route::post('/edit{id}', 'Cafecontroller@edit_save')->name('edit_save_Cafe');
//        Route::get('/del{id}', 'Cafecontroller@del')->name('del_Cafe');
//
//
//    });
////category
//    Route::namespace('App\Http\Controllers\admin')->prefix('category')->group(function () {
//
//        Route::get('/', 'Categoryconteoller@index')->name('list_Category');
//        Route::get('/add', 'Categoryconteoller@add')->name('add_Category');
//        Route::post('/add', 'Categoryconteoller@save')->name('save_Category');
//        Route::get('/edit{id}', 'Categoryconteoller@edit')->name('edit_Category');
//        Route::post('/edit{id}', 'Categoryconteoller@edit_save')->name('edit_save_Category');
//        Route::get('/del{id}', 'Categoryconteoller@del')->name('del_Category');
//    });
////Feeds
//    Route::namespace('App\Http\Controllers\admin')->prefix('feed')->group(function () {
//
//        Route::get('/', 'Feedcontroller@index')->name('list_Feed');
//        Route::get('/add', 'Feedcontroller@add')->name('add_Feed');
//        Route::post('/add', 'Feedcontroller@save')->name('save_Feed');
//        Route::get('/edit{id}', 'Feedcontroller@edit')->name('edit_Feed');
//        Route::post('/edit{id}', 'Feedcontroller@edit_save')->name('edit_save_Feed');
//        Route::get('/del{id}', 'Feedcontroller@del')->name('del_Feed');
//
//
//    });
//

    // Gallery
    Route::namespace('App\Http\Controllers\admin')->prefix('gallery')->group(function () {

        Route::get('/', 'galleryController@index')->name('list_gallery');
        Route::get('/add', 'galleryController@add')->name('add_gallery');
        Route::post('/add', 'galleryController@save')->name('save_gallery');
        Route::get('/edit{id}', 'galleryController@edit')->name('edit_gallery');
        Route::post('/edit{id}', 'galleryController@edit_save')->name('edit_save_gallery');
        Route::get('/del{id}', 'galleryController@del')->name('del_gallery');


    });
    // comment
    Route::namespace('App\Http\Controllers\admin')->prefix('comment')->group(function () {

        Route::get('/', 'commentController@index')->name('list_comment');
        Route::get('/{id}', 'commentController@see')->name('see_comment');
        Route::get('/confirm/{id}', 'commentController@confirm')->name('confirm_comment');
    });

////Escape Rooms
//    Route::namespace('App\Http\Controllers\admin')->prefix('escape_room')->group(function () {
//
//        Route::get('/', 'Escape_roomController@index')->name('list_Escape_room');
//        Route::get('/add', 'Escape_roomController@add')->name('add_Escape_room');
//        Route::post('/add', 'Escape_roomController@save')->name('save_Escape_room');
//        Route::get('/edit{id}', 'Escape_roomController@edit')->name('edit_Escape_room');
//        Route::post('/edit{id}', 'Escape_roomController@edit_save')->name('edit_save_Escape_room');
//        Route::get('/del{id}', 'Escape_roomController@del')->name('del_Escape_room');
//        //sections
//        Route::post('/addsection/{id}', 'Escape_roomController@add_section')->name('add_section');
//        Route::post('/savesection/{id}', 'Escape_roomController@save_section')->name('save_section');
//        Route::get('/editsection/{id}', 'Escape_roomController@edit_section')->name('edit_section');
//    });
////Escape Rooms - themes
//    Route::namespace('App\Http\Controllers\admin')->prefix('theme')->group(function () {
//
//        Route::get('/', 'themeController@index')->name('list_theme');
//        Route::get('/add', 'themeController@add')->name('add_theme');
//        Route::post('/add', 'themeController@save')->name('save_theme');
//        Route::get('/edit{id}', 'themeController@edit')->name('edit_theme');
//        Route::post('/edit{id}', 'themeController@edit_save')->name('edit_save_theme');
//        Route::get('/del{id}', 'themeController@del')->name('del_theme');
//
//    });
//
//    //   - Reserves
//    Route::namespace('App\Http\Controllers\admin')->prefix('reserve')->group(function () {
//
//        Route::get('/list', 'ReserveController@index')->name('index_reserve');
//        Route::get('/show/{id}', 'ReserveController@show')->name('show_reserve');
//        Route::get('/', 'ReserveController@date_picker')->name('Reserve');
//        Route::post('/', 'ReserveController@select_section')->name('select_section_Reserve');
//        Route::post('/save', 'ReserveController@save')->name('save_Reserve');
//        Route::get('/save', 'ReserveController@save_error')->name('save_Reserve');
//        Route::post('/do_save', 'ReserveController@do_save')->name('do_save_Reserve');
//        Route::get('/cancel_reserve/{id}', 'ReserveController@cancel_reserve')->name('cancel_reserve');
//
//
//    });
//
//
    //Products
    Route::namespace('App\Http\Controllers\admin')->prefix('Product')->group(function () {

        Route::get('/', 'ProductController@index')->name('list_Product');
        Route::get('/add', 'ProductController@add')->name('add_Product');
        Route::post('/add', 'ProductController@save')->name('save_Product');
        Route::get('/edit/{id}', 'ProductController@edit')->name('edit_Product');
        Route::post('/edit/{id}', 'ProductController@edit_save')->name('edit_save_Product');
        Route::get('/del/{id}', 'ProductController@del')->name('del_Product');
    });
    //category_Products
    Route::namespace('App\Http\Controllers\admin')->prefix('Product/category_for_products')->group(function () {

        Route::get('/', 'category_for_productsController@index')->name('list_category_for_products');
        Route::get('/add', 'category_for_productsController@add')->name('add_category_for_products');
        Route::post('/add', 'category_for_productsController@save')->name('save_category_for_products');
        Route::get('/edit/{id}', 'category_for_productsController@edit')->name('edit_category_for_products');
        Route::post('/edit/{id}', 'category_for_productsController@edit_save')->name('edit_save_category_for_products');
        Route::get('/del/{id}', 'category_for_productsController@del')->name('del_category_for_products');
    });
//
//
//    //Orders
//    Route::namespace('App\Http\Controllers\admin')->prefix('order')->group(function () {
//        Route::get('/', 'OrderController@index')->name('list_Order');
//        Route::get('/add/{id}', 'OrderController@add')->name('add_Order');
//        Route::post('/add/{id}', 'OrderController@save')->name('save_Order');
//        Route::get('/edit/{id}', 'OrderController@edit')->name('edit_Order');
//        Route::post('/edit/{id}', 'OrderController@edit_save')->name('edit_save_Order');
//        Route::get('/del/{id}', 'OrderController@del')->name('del_Order');
//
//        Route::get('/check/{id}', 'OrderController@check')->name('check_Order');//ordrer ID
//        Route::get('/final/{id}', 'OrderController@final')->name('final_save_order');//id ==> Order id
//        Route::get('/get_factor/{id}', 'OrderController@get_factor')->name('get_factor_order');//id ==> Order id
////        Route::get('/confirm/{id}', 'OrderController@confirm')->name('confirm_order');//id ==> Order id
//        Route::post('/check/{id}', 'OrderController@confirm')->name('confirm_tracing_ID_order');//id ==> Order id
//
//
//    });
//
//
//    //Contacts
//    Route::namespace('App\Http\Controllers\admin')->prefix('Contact')->group(function () {
//        Route::get('/', 'ContactController@index')->name('list_Contact');
//        Route::get('/show/{id}', 'ContactController@show')->name('show_Contact');
////        Route::get('/del/{id}', 'ContactController@del')->name('del_Contact');
//
//        //types
//        Route::get('/types', 'ContactController@types')->name('list_type_contact');
//        Route::get('/add_type', 'ContactController@add_type')->name('add_Contact_type');
//        Route::post('/add_type', 'ContactController@add_save_type')->name('add_save_Contact_type');
//        Route::get('/edit_type/{id}', 'ContactController@edit_type')->name('edit_Contact_type');
//        Route::post('/edit_type/{id}', 'ContactController@edit_save_type')->name('edit_save_Contact_type');
//        Route::get('/del_type/{id}', 'ContactController@del_type')->name('del_Contact_type');
//
//
//    });
//
    //Config
    Route::namespace('App\Http\Controllers\admin')->prefix('config')->group(function () {
        Route::get('/', 'configController@edit')->name('edit.config');
        Route::post('/', 'configController@save')->name('save.config');
        Route::post('/upload', 'configController@upload')->name('upload.config');



    });
//
//    //FAQ
//    Route::namespace('App\Http\Controllers\admin')->prefix('FAQ')->group(function () {
//
//        Route::get('/', 'FAQController@index')->name('FAQ.back.index');
//        Route::get('/add', 'FAQController@add')->name('FAQ.back.add');
//        Route::post('/add', 'FAQController@save')->name('FAQ.back.save');
//        Route::get('/{id}', 'FAQController@edit')->name('FAQ.back.edit');
//        Route::post('/{id}', 'FAQController@save_edit')->name('FAQ.back.save_edit');
//        Route::get('/del/{id}', 'FAQController@del')->name('FAQ.back.del');
//    });
//

});
