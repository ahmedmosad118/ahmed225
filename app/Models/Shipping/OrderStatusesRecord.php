<?php

namespace App\Models\Shipping;

use Illuminate\Database\Eloquent\Model;

class OrderStatusesRecord extends Model
{
            public function statuse()
    {
        return $this->belongsTo(OrderStatuse::class);
    }

}
