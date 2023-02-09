<?php
namespace Mnaudry\Patterns\CreationalPatterns\Singleton;

use DateTime;
use Mnaudry\Patterns\CreationalPatterns\Singleton\Singleton;

class Logger extends Singleton {

    private $contents = [];

    protected function __construct() {
        $this->contents[] = sprintf("Start writting log : Time %s", (new DateTime())->format("D , d M Y H:m"));
    }

    public function write($message) {
        $this->contents[] = sprintf("%s : Time %s",$message,(new DateTime())->format("D , d M Y H:m"));
    }
}