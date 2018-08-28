<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Sponsor extends Model implements HasMedia
{
    use HasMediaTrait;
    
    protected $fillable = [
        'name', 'slug', 'uri', 'description',
    ];
}
