<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home/index');
    }

    public function detail_kategori(){
        return view('home/detail_kategori');
    }

    public function detail_produk(){
        return view('home/detail_produk');
    }

    public function keranjang(){
        return view('home/keranjang');
    }
    
    public function checkout(){
        return view('home/checkout');
    }
}

