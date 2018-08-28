<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Organiser extends Model implements HasMedia
{
    use HasMediaTrait;
    
    protected $fillable = [
        'firstname', 'lastname', 'slug', 'bio',
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
