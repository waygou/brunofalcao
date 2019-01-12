<?php

namespace Waygou\BrunoFalcao\Models;

use Parsedown;
use Spatie\Tags\HasTags;
use Illuminate\Support\Facades\Storage;
use Waygou\BrunoFalcao\Abstracts\EloquentAbstract;

class Post extends EloquentAbstract
{
    use HasTags;

    protected $casts = [
        'published' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeByNewest($query)
    {
        return $query->orderBy('published_at', 'desc');
    }

    public function getHtmlAttribute($value)
    {
        $parsedown = new Parsedown();

        // The Markdown of the images should be replaced by the real URL.
        $this->body = str_replace_assoc(['image1' => Storage::url($this->image_1),
                                         'image2' => $this->image_2,
                                         'image3' => $this->image_3,
                                         'image4' => $this->image_4,
                                         'image5' => $this->image_5,
                                        ], $this->body);

        return $parsedown->text($this->body);
    }
}
