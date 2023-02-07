<?php

namespace App\Http\Controllers;

use App\Models\Singleton;


class SingletonController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {

        return view('singleton', [
            'a' => Singleton::getInstance(),
            'b' => Singleton::getInstance(),
            'c' => Singleton::getInstance(),
        ]);
    }
}
