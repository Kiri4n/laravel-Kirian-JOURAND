<?php

namespace App\Models;

class FactoryFacade
{
    public static function commander($carBrand, $carName): array
    {
        $car = Factory::createCar($carBrand, $carName);
        $concession = new Concession();
        $concession->addCar($car);
        $facture = new Facture($car);

        return ['car' => $car, 'concession' => $concession, 'facture' => $facture];
    }
}
