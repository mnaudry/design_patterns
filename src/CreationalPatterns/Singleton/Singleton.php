<?php
namespace Mnaudry\Patterns\CreationalPatterns\Singleton;


class Singleton {

    private static $instances = [];

    protected function __construct() {}

    protected function __clone() {}

    public function __wakeup()
    {
        throw new \Exception("Cannot serialize singleton");
    }

    public static function getInstance() {

        $class = static::class ;

        if(!isset(self::$instances[$class])){
            $instance = new static();
            self::$instances[$class] = $instance ;
        }


        return self::$instances[$class];

    }
}