<?php

namespace Waygou\BrunoFalcao\Features\Homepage\Controllers;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        return ['text' => 'Hi there! This is a Twinkle!'];
    }
}
