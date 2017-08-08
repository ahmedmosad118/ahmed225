<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
       public function patches()
    {
        return $this->hasMany(Patch::class);
    }

}
