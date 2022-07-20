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


route::get('/','HomeController@index');
route::get('/cart','HomeController@cart');
route::get('/e-commerce/paymmet/creadit/','PaymentControlller@creadit');
route::get('/e-commerce/payment/QR','PaymentController@QR');

