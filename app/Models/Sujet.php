<?php

namespace App\Models;

class Sujet
{
    public array $observerCollection = [];

    public function registerObserver(Observer $observer): void
    {
        $observerToRegister = array_search($observer, $this->observerCollection);
        if (!$observerToRegister) {
            $this->observerCollection[] = $observer;
        }

    }

    public function unregisterObserver(Observer $observer): void
    {
        $observerToUnregister = array_search($observer, $this->observerCollection);
        if ($observerToUnregister) {
            unset($this->observerCollection[$observerToUnregister]);
        }
    }

    public function notifyObservers(): void
    {
        foreach ($this->observerCollection as $observer) {
            $observer->update();
        }
    }
}
