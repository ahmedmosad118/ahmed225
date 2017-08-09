<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
       protected $table = 'products_images';
        public function image()
    {
        return $this->belongsTo(Image::class,'image_id');
    }
        public function model()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

}
