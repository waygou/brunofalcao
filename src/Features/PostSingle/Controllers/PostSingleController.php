<?php

namespace Waygou\BrunoFalcao\Features\PostSingle\Controllers;

use Waygou\BrunoFalcao\Models\Post;
use App\Http\Controllers\Controller;

class PostSingleController extends Controller
{
    public function __construct()
    {
        // Add your middleware, if needed.
    }

    public function show($kebab)
    {
        $post = Post::slug($kebab)->first();

        return flame(['post' => $post]);
    }
}
