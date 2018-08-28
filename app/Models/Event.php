<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'meetup_id', 'title', 'slug', 'description', 'future', 'meetup_data',
    ];

    protected $casts = [
        'future' => 'boolean',
        'meetup_data' => 'array'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function talks()
    {
        return $this->hasMany(\App\Models\Talk::class);
    }
}
