<?php
namespace Mnaudry\Patterns\CreationalPatterns\Singleton;

use Mnaudry\Patterns\CreationalPatterns\Singleton\Singleton;

class Config extends Singleton {


    private $hashmaps = [];
    protected function __construct()
    {
    }

    public function addValue(string $key,string $value) {
        $this->hashmaps[$key] = $value;
    }
}