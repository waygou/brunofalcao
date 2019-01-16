<?php

namespace Waygou\BrunoFalcao\Features\PostSingle\Controllers;

use Waygou\BrunoFalcao\Models\Post;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{
    public function show($kebab)
    {
        $post = Post::slug($kebab)->first();

        return ['post' => $post];
    }

    public function store(Request $request, $kebab)
    {
        //return ['post' => Post::where('slug', $kebab)];
    }
}
