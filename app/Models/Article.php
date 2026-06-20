<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    protected $fillable = [
        'internal_code',
        'detailed_descrption',
        'price',
        'cost',
        'available_status',
        'entry_date',
    ];
public function articleFactories():HasMany
{
    return $this->hasMany(related: FactoryArticles::class);

}
public function orderLines(): HasMany
{
    return $this->hasMany(related: OrderLine::class);
}
}
