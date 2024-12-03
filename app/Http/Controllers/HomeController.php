<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('site.master');
    }

    public function homePage(){
        return view('site.index');
    }

    public function cart(){
        return view('site.cart');
    }

    public function checkOut(){
        return view('site.checkout');
    }

    public function detailProDuct(){
        return view('site.detail_product');
    }

    public function product(){
        return view('site.product');
    }

}
