<?php

namespace App\Models;

class Renault extends Voiture
{
    public function __construct($name)
    {
        parent::__construct($name, 'Renault', 22000);
    }

    public function getName(): string
    {
        return $this->name;
    }
}
