<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Talk extends Model
{
    protected $fillable = [
        'title', 'slug', 'abstract',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function speaker()
    {
        return $this->belongsTo(\App\Models\Speaker::class);
    }
}
