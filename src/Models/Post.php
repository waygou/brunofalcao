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

    public function scopeSlug($query, $value)
    {
        return $query->where('slug', $value);
    }

    public function scopeByNewest($query)
    {
        return $query->orderBy('published_at', 'desc');
    }

    public function getHtmlAttribute($value)
    {
        $parsedown = new Parsedown();

        // The Markdown of the images should be replaced by the real URL.
        $this->body = str_replace_assoc(['(image1)' => '('.Storage::url($this->image_1).')',
                                         '(image2)' => '('.Storage::url($this->image_2).')',
                                         '(image3)' => '('.Storage::url($this->image_3).')',
                                         '(image4)' => '('.Storage::url($this->image_4).')',
                                         '(image5)' => '('.Storage::url($this->image_5).')',
                                        ], $this->body);

        $html = $parsedown->text($this->body);

        // Make some HTML enhancements.
        // 1. <img src=" should become <img class="img-fluid" src=".
        $html = str_replace_assoc(['<img src=' => "<img class='img-fluid' src="], $html);

        return $html;
    }
}
