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

use App\Pizzas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

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

Route::get('/admin/orders', 'AdminController@orders')->middleware('isAdmin');

Route::get('/pizzas', 'AdminController@pizzas');

Route::get('/browse', 'AdminController@browse');

Route::post('/browse', 'AdminController@createOrder')->name('browse');

Route::get('/search', function(){
    return view('admin/pizzas/search');
});

Route::any('/search_results', function(){
    $q=Input::get ('q');
    $pizza=Pizzas::where('p_name','LIKE','%'.$q.'%')->orWhere('crust','LIKE','%'.$q.'%')->orWhere('cheese','LIKE','%'.$q.'%')->get();
    if(count($pizza)>0)
    {
        return view('/admin/pizzas/search_results')->withDetails($pizza)->withQuery($q);
    }
    else
    {
        return 'No details found.';
    }
});

Route::get('/customers', function(){
    return view('customers/index');
})->middleware('isCustomer');

Route::get('/customers/create', function(){
    return view('/customers/create');
})->middleware('isCustomer');

Route::post('/customers/create', 'AdminController@createCustomer')->middleware('isCustomer');

Route::get('/customers/login', function(){
    return view('customers/login');
})->middleware('isCustomer');

Route::get('/customers/order', function(){
    return view('/customers/order/index');
})->middleware('isCustomer');

Route::get('/customers/latest_order/{cost}', function($cost){
    return view('customers/order/status', compact('cost'));
})->name('latest_order')->middleware('isCustomer');

Route::get('/customers/history', 'AdminController@history')->middleware('isCustomer');
