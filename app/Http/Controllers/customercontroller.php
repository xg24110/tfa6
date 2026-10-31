<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\customer;

class customercontroller extends Controller
{
    public function index(): View{
        $customers = customer::all();

        return view('customer.index', ['customers' => $customers]);
    }
}