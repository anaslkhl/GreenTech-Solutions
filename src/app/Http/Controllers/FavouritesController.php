<?php

namespace App\Http\Controllers;

use App\Models\Favourites;
use App\Models\Product;
use Illuminate\Http\Request;

class FavouritesController extends Controller
{
    //


    // public function favourites()
    // {
    //     return view('favourites');
    // }

    public function favourites(Request $request)
    {
        $products = $request->user()->favouriteProducts;
        return view('favourites', compact('products'));
    }


    public function toggle(Request $request, $id)
    {
        // dd($id);
        $request->user()->favouriteProducts()->toggle($id);
        return back();
    }

    public function deleteFavourite(Request $request, $id)
    {
        $favourite = Favourites::destroy($id);
        $favourites = Favourites::all();
        return view('favourites', compact('favourites'));
    }
}
