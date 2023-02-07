<?php

namespace App\Models;

class Facture
{
    public $car;
    public $toPay = 0.00;

    public function __construct($car)
    {
        $this->car = $car;
        $this->toPay = $car->price * 1.20;
    }
}
