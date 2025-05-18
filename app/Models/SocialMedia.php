<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SocialMedia extends Model
{
    use HasFactory;
    protected $fillable = [
        'platform_name',
        'profile_url'
    ];

    public function setPlatformNameAttribute($value)
    {
        $this->attributes['platform_name'] = strtolower($value);
    }
}
