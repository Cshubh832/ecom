<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('index');
    }
    public function cart(){
        return view('cart');
    }
    public function checkout(){
        return view('checkout');
    }
    public function contact(){
        return view('contact');
    }
    public function my_account(){
        return view('my_account');
    }
    public function product_detail(){
        return view('product_detail');
    }
    public function product_list(){
        return view('product_list');
    }
    public function wishlist(){
        return view('wishlist');
    }
    public function login(){
        return view('login');
    }
}
