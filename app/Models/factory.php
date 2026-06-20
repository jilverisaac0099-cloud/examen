<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class factorI extends Model
{
    protected $fillable = [
        'company_name',
        'identification_number',
        'telephone',
        'email',
        'address',
        'supplier_status',
    ];
    public function factory (): HasMany
    {
        return $this->hasMany(related: FactoryArticles:: class);
}
}
