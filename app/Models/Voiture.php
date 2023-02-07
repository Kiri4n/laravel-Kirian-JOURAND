<?php

namespace App\Models;

abstract class Voiture
{
    public $name;
    public $brand;
    public $price;

    public function __construct($name, $brand, $price)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
    }

    public function getName(): string
    {
        return 'pas de nom';
    }

    // template
    public function getText(): string
    {
        return 'Voiture '.$this->getName().' de la marque '.$this->brand;
    }
}
