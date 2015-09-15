<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon;

class Article extends Model
{
    protected $fillable = [
        'title',
        'description',
        'published_at',
    ];

    protected $dates = ['published_at'];

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query)
    {
        $query->where('published_at', '>=', Carbon::now());
    }
}
