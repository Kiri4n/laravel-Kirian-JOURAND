<?php

namespace App\Http\Controllers;

use App\Models\Factory;
use App\Models\FactureLine;

class FactureLineController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $voitureOpen = Factory::createCar('opel', 'voiture1');
        $voitureRenault = Factory::createCar('renault', 'voiture2');

        return view('facture_line', [
            'a' => new FactureLine($voitureOpen),
            'b' => new FactureLine($voitureRenault),
        ]);
    }
}
