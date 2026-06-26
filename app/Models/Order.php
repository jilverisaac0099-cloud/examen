<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable =[
        
        'date_creation',
        'subtotal',
        'iba',
        'grand_total',
        'additional_note',
        'order_status',

    ];
    public function customer()
    {
        return $this->belongsTo( customer::class);
    }
    public function shippingAddress()
    {
        return $this->belongsTo(shippingAddress::class);
    }
    
    }
