<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function form()
    {
        return view('product-form');
    }

    public function catalog()
    {
        return view('catalog');
    }

    public function product()
    {
        return view('product-detail');
    }

    public function admin()
    {
        return view('admin-dashboard');
    }
}
