<?php

namespace App\Models;

use App\Enums\PostStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $casts = [
        'status' => PostStatus::class,
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
