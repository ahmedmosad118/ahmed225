<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
	        protected $table = 'product_types';

            public function products()
    {
        return $this->hasMany(Products::class);
    }

}
