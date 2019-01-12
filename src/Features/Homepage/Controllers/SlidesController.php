<?php

namespace Waygou\BrunoFalcao\Features\Homepage\Controllers;

use Waygou\BrunoFalcao\Models\Post;
use App\Http\Controllers\Controller;

class SlidesController extends Controller
{
    public function index()
    {
        //$posts = Post::published()->byNewest()->get();

        //dd($posts[0]->tags);

        return ['posts' => Post::published()->byNewest()->get() ];
    }
}
