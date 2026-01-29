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
        return view('form');
    }

    public function catalog()
    {
        return view('catalog');
    }

    public function product()
    {
        return view('product');
    }

    public function admin()
    {
        return view('dashboard');
    }
}
