<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['name', 'prix', 'category_id', 'image', 'description'];

    protected $primaryKey = 'id';




    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    //
}
