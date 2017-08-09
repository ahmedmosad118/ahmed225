<?php

namespace App\Models\Shipping;

use Illuminate\Database\Eloquent\Model;

class ShippingCompanyAgent extends Model
{
        public function company()
    {
        return $this->belongsTo(ShippingCompany::class,'shipping_company_id');
    }
}
