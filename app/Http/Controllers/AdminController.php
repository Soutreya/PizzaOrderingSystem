<?php

namespace App\Http\Controllers;

use App\Customers;
use App\Http\Requests\CustomersRequest;
use App\Orders;
use App\Pizzas;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function customers()
    {
        $customers=User::all();
        return view('admin/customers', compact('customers'));
    }
    public function createCustomer(CustomersRequest $request)
    {
        User::create($request->all());
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
        $customer=Auth::User();
        $cost=($request->qty)*(Pizzas::find($p_id)->mrp);
        Orders::create(['id'=>$customer->id, 'name'=>$customer->name, 'p_id'=>$p_id, 'qty'=>$request->qty, 'cost'=>$cost]);
        return redirect()->route('latest_order', [$cost]);
    }
    public function orders()
    {
        $orders=Orders::all();
        $pizzas=Pizzas::all();
        return view('admin/orders', compact('orders', 'pizzas'));
    }
}