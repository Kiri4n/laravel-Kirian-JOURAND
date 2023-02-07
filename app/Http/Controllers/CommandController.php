<?php

namespace App\Http\Controllers;

class CommandController extends Controller
{
    public function show(): \Illuminate\View\View
    {
        return view('command');
    }
}
