<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auth;
use App\User;


class CustomerController extends Controller
{
    public function index()
    {
        return view('pages.customer.main');
    }

    
}