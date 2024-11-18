<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class NewsCategories extends Model
{
    public function user(): HasOne
    {
        return $this->hasOne(
            User::class,
            'id',
            'created_by'
        );
    }

    public function news(): BelongsToMany
    {
        return $this->belongsToMany(
            News::class,
            'news_has_categories',
            'category_id',
            'news_id',
            'id',
            'id'
        );
    }
}
