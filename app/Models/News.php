<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class News extends Model
{
    public function user(): HasOne
    {
        return $this->hasOne(
            User::class,
            'id',
            'created_by'
        );
    }
}
