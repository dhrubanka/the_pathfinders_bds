<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.admin_dashboard');
    } 

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('admin');
    }
}
