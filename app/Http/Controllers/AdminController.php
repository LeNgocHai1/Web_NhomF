<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // publics function index()
    // {
    //     return view('home');
    // }
    public function show()
    {
        return view('pages.admin.main');
    }
    public function detaiuser(){
       return view('detailuser');
    }

}
