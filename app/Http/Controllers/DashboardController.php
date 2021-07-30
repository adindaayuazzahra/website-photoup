<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class DashboardController extends Controller
{

    public function index(){
        return view('admin.dashboard');
    }
}
