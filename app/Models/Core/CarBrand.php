<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model
{
    protected $table = 'car_brands';
    public function products()
    {
        return $this->hasMany(Product::class);
    }
        public function models()
    {
        return $this->hasMany(CarModel::class);
    }


}
