<?php

namespace App\Models\Shipping;

use Illuminate\Database\Eloquent\Model;
use App\Models\Core\Patch;


class OrderItem extends Model
{
        public function patch()
    {
        return $this->belongsTo(Patch::class);
    }


}
