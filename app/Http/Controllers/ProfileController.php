<?php

namespace App\Http\Controllers;

use App\Address;
use App\Order;
use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {
        $addresses = Address::where('user_id', Auth::user()->id )->get();
        $orders = Order::where('user_id', Auth::user()->id)->get();
        return view('profile.myprofile',[ 'addresses' => $addresses,'orders'=> $orders ]);
    }
    public function addressCreate(){
        return view('profile.address_create');
    }
    public function addressStore(){
       // $this->getValidate();
        Address::create([
            'user_id' => request('user_id'),
            'state' => request('state'),
            'district' => request('district'),
            'street' => request('street'),
            'locality' => request('locality'),
            'landmark' => request('landmark'),
            'pin' => request('pin')
        ]);
        return redirect('/profile');
        
    }
    public function requestStore(){
        Order::create([
            'user_id' => request('user_id'),
            'book_id' => request('book_id'),
            'address_id' => request('address_id'),
            'status' => request('status'),
            
        ]);
        return redirect('/profile/#pills-order');
    }
}
