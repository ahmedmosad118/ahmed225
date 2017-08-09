<?php

namespace App\Models\Shipping;

use Illuminate\Database\Eloquent\Model;

class ShippingCompany extends Model
{
        public function agents()
    {
        return $this->hasMany(ShippingCompanyAgent::class);
    }
}
