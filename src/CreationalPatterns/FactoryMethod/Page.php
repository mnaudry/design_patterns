<?php
namespace Mnaudry\Patterns\CreationalPatterns\FactoryMethod;

interface Page {

    public function setData(?string $data):void;

    public function create();
}