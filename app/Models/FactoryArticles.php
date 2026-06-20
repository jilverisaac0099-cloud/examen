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
    public function factoryArticle()
    {
        return $this->belongsTo(Factory:: class);
    }

    public function article()
    {
    return $this->belongsTo(related: Article::class);
    }
}