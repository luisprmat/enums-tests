<?php

namespace App\Models;

use App\Enums\PostStatus;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Attributes\SearchUsingFullText;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    use Searchable;

    protected $casts = [
        'status' => PostStatus::class,
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    #[SearchUsingFullText(['title', 'body'])]
    public function toSearchableArray()
    {
        return [
            'body' => $this->body,
            'title' => $this->title
        ];
    }
}
