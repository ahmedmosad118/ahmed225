<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

class CarEdition extends Model
{
        protected $table = 'car_editions';
    public function products()
    {
        return $this->hasMany(Product::class);
    }
        public function model()
    {
        return $this->belongsTo(CarModel::class,'car_model_id');
    }

}
