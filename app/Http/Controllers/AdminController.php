<?php

namespace App\Http\Controllers;

use App\Customers;
use App\Http\Requests\CustomersRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin/index');
    }
    public function orders()
    {
        return view('admin/orders/index');
    }
    public function createCustomer(CustomersRequest $request)
    {
        Customers::create($request->all());
        return redirect('/admin/customers');
    }
}