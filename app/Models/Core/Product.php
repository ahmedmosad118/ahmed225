<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    	 public function brand()
    {
        return $this->belongsTo(CarBrand::class,'car_brand_id');

}
	 public function model()
    {
        return $this->belongsTo(CarModel::class,'car_model_id');

}
	 public function edition()
    {
        return $this->belongsTo(CarEdition::class,'car_edition_id');

}
         public function type()
    {
        return $this->belongsTo(ProductType::class,'product_type_id');
    }


     public function patches()
    {
        return $this->hasMany(Patch::class);
    }
     public function product_images()
    {
        return $this->hasMany(ProductImage::class);
    }
         public function images()
    {
        return $this->belongsToMany(Image::class,'image_id');
    }

            public function product_services()
    {
        return $this->hasMany(ProductServiceRecord::class);
    }

}
