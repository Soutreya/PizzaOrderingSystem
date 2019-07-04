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

Route::get('/admin', function(){
    return view('admin/index');
})->middleware('isAdmin');

Route::get('/admin/customers', 'AdminController@customers')->middleware('isAdmin');

Route::get('/admin/pizzas/create', function(){
    return view('admin/pizzas/create');
})->middleware('isAdmin');

Route::post('/admin/pizzas/create', 'AdminController@createPizza')->middleware('isAdmin');

Route::get('/pizzas', 'AdminController@pizzas');

Route::get('/browse', 'AdminController@browse');

Route::post('/browse/{p_id}', 'AdminController@createOrder')->name('browse');

Route::get('/search', function(){
    return view('admin/pizzas/search');
});

Route::get('/customers', function(){
    return view('customers/index');
});

Route::get('/customers/create', function(){
    return view('/customers/create');
});

Route::post('/customers/create', 'AdminController@createCustomer');

Route::get('/customers/login', function(){
    return view('customers/login');
});

Route::get('/customers/order', function(){
    return view('/customers/order/index');
});

Route::get('/customers/latest_order', function(){
    return view('customers/order/status');
});
