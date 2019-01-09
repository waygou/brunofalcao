<?php

namespace Waygou\BrunoFalcao\Features\Homepage\Controllers;

use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function __construct()
    {
        // Add your middleware, if needed.
    }

    public function index()
    {
        return flame();
    }
}
