<?php

namespace App\Http\Controllers\Pages;

use Inertia\Inertia;
use Lit\Config\Form\Pages\HomeConfig;

class AboutController
{
    public function __invoke()
    {
        return Inertia::render('About/About', [
            'form' => HomeConfig::load(),
        ]);
    }
}
