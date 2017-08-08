<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

class Patch extends Model
{
       public function patch_properties()
    {
        return $this->hasMany(PatchPropertyValue::class);
    }

}
