<?php

namespace App\Models;

class Singleton
{
    public $count;
    public static $instance = null;

    private function __construct()
    {
        $this->count = 0;
    }

    public static function getInstance()
    {
        if (!self::$instance) { self::$instance = new Singleton(); }
        return self::$instance;
    }

    public function increment(): int
    {
        return $this->count++;
    }
}
