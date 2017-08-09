<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

class Patch extends Model
{
       public function patch_properties()
    {
        return $this->hasMany(PatchPropertyValue::class);
    }
           public function supplier()
    {
        return $this->belongsTo(Supplier::class,'supplier_id');
    }
           public function product()
    {
        return $this->belongsTo(Supplier::class,'product_id');
    }


}
