<?php

namespace App\Models;

class Observer
{
    public int $numberOfTimeUpdated = 0;

    public function update(): void
    {
        $this->numberOfTimeUpdated++;
    }

    public function display(): string
    {
        if ($this->numberOfTimeUpdated == 0) {
            return 'Aucune';
        }
        else {
            return "Updaté ".$this->numberOfTimeUpdated." fois";
        }
    }
}
