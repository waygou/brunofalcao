<?php

namespace Waygou\BrunoFalcao\Features\BlogSingle\Controllers;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function show()
    {
        return ['text' => 'Hi there! This is a Twinkle!'];
    }
}
