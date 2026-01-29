<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['name', 'prix', 'category', 'imageLink', 'description'];

    protected $primaryKey = 'product_id';

    


    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
    //
}
