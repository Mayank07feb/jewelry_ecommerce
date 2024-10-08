<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function brand(){
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function images(){
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    public function image(){
        return $this->hasOne(ProductImage::class, 'product_id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'cat_id');
    }

    public function variation(){
        return $this->hasOne(ProductVariation::class, 'product_id');
    }

    public function variations(){
        return $this->hasMany(ProductVariation::class, 'product_id');
    }
}
