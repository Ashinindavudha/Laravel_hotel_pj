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

Route::get('/', function () {
    return view('home.index');
});
Route::get('/success', function(){
    return view('home.success');
});

/*Route::get('/admin', function () {
    return view('admin.index');
});*/

Route::group(['middleware' => ['auth', 'role:admin']], function(){
    Route::get('/admin', 'DashboardController@index');
    Route::resource('/admin/room','RoomController');
    Route::resource('/admin/roomtype','RoomTypesController');
    Route::resource('/admin/facility' , 'FacilityController');
    Route::resource('/admin/floor' , 'FloorController');
    Route::resource('/admin/guest' , 'GuestController');
    Route::resource('/admin/reservation','ReservationController');
    Route::resource('/admin/onlinereservation', 'Onlinereservation');
    Route::get('/admin/onlinereservation/viewdetail', 'onlinereservation@show');
    Route::post('/admin/onlinereservation/confirm', 'Onlinereservation@confirm')->name('onlinereservation.confirm');
    Route::post('/admin/onlinereservation/cancel', 'Onlinereservation@cancel')->name('onlinereservation.cancel');
    Route::get('/admin/onlinereservation/approved/{id}', 'Onlinereservation@approved')->name('onlinereservation.approved');
    Route::get('/admin/reservations/confirmed', 'DashboardController@showConfirmed');
    Route::get('/admin/reservations/cancel', 'DashboardController@showCanceled');
    Route::get('/admin/reservations/total', 'DashboardController@showTotal')->name('onlinereservation.total');
    Route::resource('/admin/post', 'PostController');
    Route::resource('/admin/category', 'CategoryController');
});



Route::get('/roomlist','FrontController@getShowFacility');
Route::get('/blog','FrontController@blog');
Route::get('/','FrontController@home');
Route::get('/order', 'FrontController@order');
Route::resource('/onlinebooking', 'OnlineBookingController');
Route::get('/about', function(){
    return view('home.about');
});
Route::get('/contact', function(){
    return view('home.contact');
});




Auth::routes();


