<?php

namespace App\Models;

class Opel extends Voiture
{
    public function __construct($name)
    {
        parent::__construct($name, 'Opel', 13000);
    }

    public function getName(): string
    {
        return $this->name;
    }
}
