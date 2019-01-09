<?php

namespace Waygou\BrunoFalcao\Features\BlogSingle\Controllers;

use App\Http\Controllers\Controller;

class BlogSingleController extends Controller
{
    public function __construct()
    {
        // Add your middleware, if needed.
    }

    public function show()
    {
        return flame();
    }
}
