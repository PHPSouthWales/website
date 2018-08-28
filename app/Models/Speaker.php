<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'slug', 'bio',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
