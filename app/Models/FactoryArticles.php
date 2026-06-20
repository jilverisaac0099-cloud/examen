<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FactoryArticles extends Model
{
    protected $fillable = [
        'factory_id',
        'article_id',
        'current_stock',
        'delivery_time',
        
    ];
    public function factoryArticle():BelongsTo
    {
        return $this->belongsTo(related:Factory:: class);
    }

    public function article(): BelongsTo
    {
    return $this->belongsTo(related: Article::class);
    }
}