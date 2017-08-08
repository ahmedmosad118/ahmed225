<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $table = 'car_models';
    public function products()
    {
        return $this->hasMany(Product::class);
    }
        public function brand()
    {
        return $this->belongsTo(CarBrand::class);
    }

}
