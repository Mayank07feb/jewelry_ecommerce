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

    public function image(){
        return $this->hasOne(ProductImage::class, 'product_id');
    }
}
