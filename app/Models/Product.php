<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    protected $with = ['category'];

    // relation one to many with photo_products
    public function PhotoProduct(){
        return $this->hasMany(PhotoProduct::class);
    }

    // relation many to one with category
    public function category(){
        return $this->belongsTo(Category::class);
    }
}