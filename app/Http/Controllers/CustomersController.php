<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        return view('Customers/Customers');
    }
    public function addCustomer()
    {
        return view('Customers/addCustomer');
    }
    public function addProduct()
    {
        return view('Customers/addProduct');
    }
}
