<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    	 public function brand()
    {
        return $this->belongsTo(CarBrand::class);

}
	 public function model()
    {
        return $this->belongsTo(CarModel::class);

}
	 public function edition()
    {
        return $this->belongsTo(CarEdition::class);

}
         public function type()
    {
        return $this->belongsTo(ProductType::class);
    }


     public function patches()
    {
        return $this->hasMany(Patch::class);
    }
     public function product_images()
    {
        return $this->hasMany(ProductImage::class);
    }
            public function product_services()
    {
        return $this->hasMany(ProductServiceRecord::class);
    }

}
