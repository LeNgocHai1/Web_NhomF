<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Users;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // public function index()
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
    
    public function listuser(){
        $users = Users::where('role','user')->get();
        return view('account.index',['users'=>$users]);
    }

    public function edit($id)
    {
        $user = Users::find($id); 
        return view('account.edit',['user'=>$user]);
    }
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
       
        $user = Users::find($id)->delete();
        return redirect()->route('user.index');
    }
    
   
}