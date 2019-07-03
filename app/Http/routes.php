<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/admin', 'AdminController@index');

Route::get('/orders', 'AdminController@orders');

Route::get('/pizzas', function(){
    return view('admin/orders/pizzas/index');
});

Route::get('/search', function(){
    return view('admin/orders/pizzas/search');
});

Route::get('/admin/customers', function(){
    return view('admin/customers/index');
});

Route::get('/admin/customers/create', function(){
    return view('admin.customers.create');
});

Route::post('/admin/customers/create', 'AdminController@createCustomer');

Route::get('/admin/customers/edit', function(){
    return view('admin/customers/edit');
});