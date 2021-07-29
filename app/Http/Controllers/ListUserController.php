<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;

class ListUserController extends Controller
{
    public function index(){
        $users = User::all();

        return view('admin.pages.listuser', ['User'=>$users]);
    }

    public function regis(){
        return view('auth.register');
    }
    
}
