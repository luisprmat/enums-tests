<?php

namespace App\Enums;

enum PostStatus: int
{
    case DRAFT = 0;
    case PUBLISH = 1;
    case FUTURE = 2;

    public function color(): string
    {
        return match($this) {
            PostStatus::DRAFT => 'purple',
            PostStatus::PUBLISH => 'green',
            PostStatus::FUTURE => 'orange'
        };
    }
}
