<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //


    public function getActiveProduct()
    {
        $Category = Category::with(['products' => function ($q) {
            $q->where('active', 1)
            ->orederBy('prix', 'asc')
            ->limit(5);
        }])->get();

        return $Category;
    }


    public function categoryCount()
    {
        $somme = Category::withCount('products');
        return $somme;
    }
}
