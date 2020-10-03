<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\User;
use App\Order;
use App\Book;
use App\Feedback;
class AdminController extends Controller
{
    public function dashboard(){
        $users = User::all();
        //$donations = 
        $orders = Order::all();
        $books = Book::all();
        $feedbacks = Feedback::all();

        return view('admin.admin_dashboard', compact("users", "orders", "books", "feedbacks"));
    } 

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('admin');
    }
}
