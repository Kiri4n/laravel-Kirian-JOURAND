<?php

namespace App\Http\Controllers;

use App\Models\Factory;


class FactoryController extends Controller
{
    public function show(): \Illuminate\View\View
    {
        return view('factory', [
            'a' => Factory::createCar('opel', 'voiture1'),
            'b' => Factory::createCar('renault', 'voiture2')
        ]);
    }
}
