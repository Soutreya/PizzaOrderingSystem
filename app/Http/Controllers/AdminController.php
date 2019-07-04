<?php

namespace App\Http\Controllers;

use App\Customers;
use App\Http\Requests\CustomersRequest;
use App\Orders;
use App\Pizzas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function customers()
    {
        $customers=Customers::all();
        return view('admin/customers', compact('customers'));
    }
    public function createCustomer(CustomersRequest $request)
    {
        Customers::create($request->all());
        return redirect('/customers/order');
    }
    public function editCustomer($c_id)
    {

    }
    public function pizzas()
    {
        $pizzas=Pizzas::all();
        return view('admin/pizzas/index', compact('pizzas'));
    }
    public function createPizza(Request $request)
    {
        Pizzas::create($request->all());
        return redirect('/pizzas');
    }
    public function browse()
    {
        $pizzas=Pizzas::all();
        return view('admin/pizzas/browse', compact('pizzas'));
    }
    public function createOrder(Request $request, $p_id)
    {
        Orders::create(['p_id'=>$p_id, 'qty'=>$request->qty]);
        return redirect('/customers/latest_order');
    }
}