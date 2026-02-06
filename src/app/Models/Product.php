<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['name', 'prix', 'category_id', 'image', 'description'];

    protected $primaryKey = 'id';




    // public function favourites()
    // {
    //     return $this->belongsToMany(Favourites::class);
    // }

    public function userFavourites()
    {
        return $this->belongsToMany(User::class, 'favourites', 'product_id', 'user_id');
    }



    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function favourites(){
        return $this->morphMany(Favourites::class, 'favouriteTable');
    }

    public function getFavTables()
    {
        $favTables = Favourites::with('favourateTable')->get();
    }



    //
}
