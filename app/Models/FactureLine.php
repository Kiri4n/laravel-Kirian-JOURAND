<?php

namespace App\Models;

class FactureLine
{
    public FactureVoiture $factureVoiture;

    public function __construct($voiture)
    {
        if ($voiture instanceof Opel) {
            $this->factureVoiture = new FactureVoitureOpel();
        } elseif ($voiture instanceof Renault) {
            $this->factureVoiture = new FactureVoitureRenault();
        }
    }

    public function getTva()
    {
        return $this->factureVoiture->getTva();
    }
}
