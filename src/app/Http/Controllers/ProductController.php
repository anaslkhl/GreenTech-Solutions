<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

$destinationPath = __DIR__ . '/../../public/img/products';


class ProductController extends Controller
{
    //
    protected $with = ['category'];

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:256',
            'description' => 'required|string',
            'prix' => 'required|numeric',
            'category_id' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);
        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $imagePath = $image->store('products', 'public');
        }




        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'prix' => $request->prix,
            'category_id' => $request->category_id,
            'image' => $imagePath
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


    public function filter(Request $request)
    {
        $query = Product::query();

        if ($request->search) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->category) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('name', $request->category);
            });
        }

        $products = $query->get();
        return view('home', compact('products'));
    }



    public function getProducts()
    {
        $products = Product::with('category');
        return $products;
    }


    public function getCategoryNameWithProducts()
    {

        $product = Product::with('category:id, name')->get();
    }


    public function getPro()
    {
        $needCategory = false;
        $products = Product::all();

        if ($needCategory) {
            $products->load('category');
        }
    }


    public function totalFavouriteProductPrice()
    {
        User::withSum('favouriteProducts', 'prix')->get();
    }


    public function getProWithCatName()
    {
        $product = Product::all();
        foreach ($product as $prod) {
            echo $prod->category->name;
        }
    }


    public function showDetails($id)
    {
        $product = Product::find($id);
        return view('productDetails', compact('product'));
    }


    public function view(Request $request, $id)
    {
        $product = Product::find($id);
        return view('productDetails', compact('product'));
    }
}
