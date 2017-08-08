<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

class ProductService extends Model
{ 
   protected $table = 'product_services';

        public function product_services()
    {
        return $this->hasMany(ProductServiceRecord::class);
    }

}
