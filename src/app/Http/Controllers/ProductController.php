<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function create(Request $request)
    {
        var_dump($request->category);
        exit;

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'category' => $request->category,
            'imageLink' => $request->imageLink
        ]);
        return true;
    }

    // public function update()
    // {

    // }
}
