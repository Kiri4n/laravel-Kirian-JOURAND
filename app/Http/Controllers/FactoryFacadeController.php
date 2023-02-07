<?php

namespace App\Http\Controllers;

use App\Models\FactoryFacade;

class FactoryFacadeController extends Controller
{
    public function show(): \Illuminate\View\View
    {
        return view('factoryFacade', [
            'a' => FactoryFacade::commander('opel', 'voiture1')
        ]);
    }
}
