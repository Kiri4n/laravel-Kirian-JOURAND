<?php

namespace App\Models;

class Factory
{

    public static function createCar($carType, $name): Opel|Renault|null
    {
        return match ($carType) {
            'opel' => new Opel($name),
            'renault' => new Renault($name),
            default => null,
        };
}
}
