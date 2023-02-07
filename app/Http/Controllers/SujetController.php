<?php

namespace App\Http\Controllers;

use App\Models\Observer;
use App\Models\Sujet;

class SujetController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $sujet = new Sujet();
        $observeur1 = new Observer();
        $observeur2 = new Observer();

        $sujet->registerObserver($observeur1);
        $sujet->registerObserver($observeur2);

        return view('sujet', [
            'sujet' => $sujet,
            'observeur1' => $observeur1,
            'observeur2' => $observeur2,
        ]);
    }

}
