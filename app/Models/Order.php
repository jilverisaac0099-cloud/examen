<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable =[
        
        'date_time_creation',
        'subtotal',
        'tax_amount',
        'additional_note',
        'order_status',

    ];
    public function customer(): BelongsTo
    {
        return $this->belongsTo(related: customer::class);
    }
    public function shippingAddress():BelongsTo
    {
        return $this->belongsTo(related:shippingAddress::class);
    }
    
    public function orderLines(): HasMany
{
    return $this->hasMany(OrderLine::class);
}


}
