<?php
require_once __DIR__."/vendor/autoload.php";

use Mnaudry\Patterns\CreationalPatterns\Singleton\Logger;
use Mnaudry\Patterns\CreationalPatterns\Singleton\Config;

date_default_timezone_set('America/Moncton');


function logYourDay(){

    $logger = Logger::getInstance();
    $logger->write("Wake up");
    $logger->write("Take a shower");
    $logger->write("brush your teeth");
    $logger->write("Take your breakfast");
    $logger->write("Go to work");
}


function createConfig() {
    $config = Config::getInstance();

    $config->addValue('APP_ENV',"dev");
    $config->addValue('APP_NAME',"singleton");
}


logYourDay();
createConfig();

$logger = Logger::getInstance();

$logger->write("stop writting");
dump($logger);


$config = Config::getInstance();

dump($config);


