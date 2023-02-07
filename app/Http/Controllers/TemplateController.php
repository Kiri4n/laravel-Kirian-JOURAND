<?php

namespace App\Http\Controllers;

use App\Models\Factory;

class TemplateController extends Controller
{
    public function show(): \Illuminate\View\View
    {
        return view('template', [
            'a' => Factory::createCar('opel', 'voiture1'),
            'b' => Factory::createCar('renault', 'voiture2')
        ]);
    }
}
