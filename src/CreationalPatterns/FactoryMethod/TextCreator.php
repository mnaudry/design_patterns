<?php
namespace Mnaudry\Patterns\CreationalPatterns\FactoryMethod;
use Mnaudry\Patterns\CreationalPatterns\FactoryMethod\PageCreator;

class TextCreator  extends PageCreator {

    public function getCreator()
    {
        return new Text(null);
    }
}