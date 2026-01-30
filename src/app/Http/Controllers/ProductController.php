<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class ProductController extends Controller
{
    //

    public function store(Request $request)
    {


        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'prix' => $request->price,
            'image' => $request->imageLink,
            'category_id' => $request->category_id
        ]);
        return redirect('/home')->with('Succes', 'Product added');
    }

    public function create()
    {
        $category = Category::all();
        return view('/form', compact('category'));
    }

    public function getAll()
    {

        $products = Product::all();
        return view('home', compact('products'));
    }

    public function getCategory()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }

    public function delete($id)
    {
        $product = Product::destroy($id);
        $products = Product::all();
        return view('product', compact('products'));
    }

    public function update(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->update(request()->all());
        $products = Product::all();
        return view('product', compact('products'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $category = Category::all();
        return view('/edit', compact('category', 'product'));
    }
}
