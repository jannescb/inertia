<?php

namespace App\Http\Controllers\Pages;

use Ignite\Support\Facades\Form;
use Inertia\Inertia;

class HomeController
{
    public function __invoke()
    {
        return Inertia::render('Home', [
            'form' => Form::load('pages', 'home')
        ]);
    }
}
