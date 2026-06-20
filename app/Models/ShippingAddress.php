<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ShippingAddress extends Model
{
    protected $fillable =[
        'customer_id',
        'number',
        'street',
        'neghborhood',
        'city',
        'reference_location',
        'adress_status',


    ];
    public function customer()
    {
        return $this->belongsTo(related:customer::class);
    
    }
    public function order()
    {
        return $this->hasMany(related: order::class);
    }
}
