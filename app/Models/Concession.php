<?php

namespace App\Models;

use ArrayObject;

class Concession
{
    private $concession = [];
    public $concessionIterator;

    public function __construct()
    {
        $this->concessionIterator = new ArrayObject();
    }

    public function addCar($valeur): void
    {
        $this->concession[] = $valeur;
        $this->concessionIterator->append($valeur);
    }


}
