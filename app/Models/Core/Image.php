<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function product_images()
    {
        return $this->hasMany(ProductImage::class);
    }

}
