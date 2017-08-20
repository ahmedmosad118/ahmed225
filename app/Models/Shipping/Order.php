<?php

namespace App\Models\Shipping;

use Illuminate\Database\Eloquent\Model;
use App\Models\Core\Patch;


class Order extends Model
{
             public function shipping_company()
    {
        return $this->belongsTo(ShippingCompany::class,'shipping_company_id');
    }
                 public function client()
    {
        return $this->belongsTo(Client::class,'client_id');
    }
                     public function employee()
    {
        return $this->belongsTo(Employee::class,'employee_id');
    }
         public function order_statuses_records()
    {
        return $this->hasMany(OrderStatusesRecord::class);
    }

             public function order_items()
    {
        return $this->hasMany(OrderItem::class);
    }




}
