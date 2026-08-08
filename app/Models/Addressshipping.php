<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer; // <--- Asegúrate de tener esto arriba

class AddressShipping extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'street',
        'neighborhood',
        'city',
        'reference',
        'state_address',
        'customer_id',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
