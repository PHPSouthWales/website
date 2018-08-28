<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Speaker extends Model implements HasMedia
{
    use HasMediaTrait;
    
    protected $fillable = [
        'firstname', 'lastname', 'slug', 'bio',
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
