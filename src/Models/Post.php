<?php

namespace Waygou\BrunoFalcao\Models;

use Spatie\Tags\HasTags;
use Waygou\BrunoFalcao\Abstracts\EloquentAbstract;

class Post extends EloquentAbstract
{
    use HasTags;

    protected $casts = [
        'published' => 'boolean',
        'published_at' => 'datetime'
    ];
}
