<?php

namespace App\Models;

abstract class FactureVoiture
{
    public int $tva;

    public function getTva()
    {
        return $this->tva;
    }
}
