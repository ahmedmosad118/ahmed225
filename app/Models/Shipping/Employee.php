<?php

namespace App\Models\Shipping;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
        public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
