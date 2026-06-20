<?php

namespace App\Models;
use Illuminate\Database\Eloquent\factor\Hasfactory;
use Illuminate\database\Eloquent\Model;
use Illuminate\Database\Eloquent\relations\BelongsTo;


class OrderLine extends Model
{
    protected $fillable =[
        'request_quantity',
        'unite_price',
        'subtotal',
    ];
    public function order():Belongsto
    {
        return $this->belongsTo(related: Order::class);
    }
    public function article(): Belongsto
    {
        return $this->belongsTo(related:Article::class);
    }
}
