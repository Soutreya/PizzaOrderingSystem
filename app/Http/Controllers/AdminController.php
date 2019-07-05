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
    public function createOrder(Request $request)
    {
        $customer=Auth::User();
        $pizzas=Pizzas::all();
        $input=$request->all();
        $tot_cost=0;
        foreach($pizzas as $pizza)
        {
            if($input[$pizza->p_id]!=='')
            {
                $qty=$input[$pizza->p_id];
                $pizza=Pizzas::find($pizza->p_id);
                $pizza->qty_avail=($pizza->qty_avail)-($qty);
                $pizza->save();
                $cost=($qty)*($pizza->mrp);
                $tot_cost=$tot_cost+$cost;
                Orders::create(['id'=>$customer->id, 'name'=>$customer->name, 'p_id'=>$pizza->p_id, 'qty'=>$qty, 'cost'=>$cost]);
            }
        }
        return redirect()->route('latest_order', [$tot_cost]);
    }
    public function orders()
    {
        $orders=Orders::all();
        $pizzas=Pizzas::all();
        return view('admin/orders', compact('orders', 'pizzas'));
    }
    public function history()
    {
        $user=Auth::User();
        $orders=Orders::all();
        $pizzas=Pizzas::all();
        return view('customers/history', compact('orders', 'user', 'pizzas'));
    }
}