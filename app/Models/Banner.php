<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = ['page', 'title', 'subtitle', 'image', 'order'];

    // public function scopeForPage($query, $page)
    // {
    //     return $query->where('page', $page)->orderBy('order', 'asc');
    // }
}
