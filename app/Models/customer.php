<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'telephone',
        'balance',
        'credit_limit',
        'discount',
        'registration_date',
        'customer_status'
    ];

    
    public function order()
    {
        return $this->hasMany(related:order::class);
    }
}
