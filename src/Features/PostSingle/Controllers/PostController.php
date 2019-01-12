<?php

namespace Waygou\BrunoFalcao\Features\PostSingle\Controllers;

use Waygou\BrunoFalcao\Models\Post;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function show($kebab)
    {
        return ['post' => Post::where('slug', $kebab)];
    }
}
