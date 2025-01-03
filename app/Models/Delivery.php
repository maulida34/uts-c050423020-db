<?php

// app/Models/Delivery.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'delivery_date', 'status', 'driver_name', 'vehicle_number'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
