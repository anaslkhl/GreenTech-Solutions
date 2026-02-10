<?php

namespace App\Http\Controllers;

use App\Models\Favourites;
use App\Models\Product;
use App\Models\User;
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
        $favourites = $request->user()->favouriteProducts;
        return view('favourites', compact('favourites'));
    }


    public function toggle(Request $request, $id)
    {
        // dd($id);
        $request->user()->favouriteProducts()->toggle($id);
        return back();
    }

    public function deleteFavourite(Request $request, $id)
    {

        $user = $request->user();
        $user->favouriteProducts()->detach($id);

        $favourites = $user->favouriteProducts()->get();

        return view('favourites', compact('favourites'));
    }
}
