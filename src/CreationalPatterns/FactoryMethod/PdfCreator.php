<?php
namespace Mnaudry\Patterns\CreationalPatterns\FactoryMethod;

use Mnaudry\Patterns\CreationalPatterns\FactoryMethod\PageCreator;
use Mnaudry\Patterns\CreationalPatterns\FactoryMethod\Pdf;

class PdfCreator extends PageCreator {

    public function getCreator()
    {
        return  new Pdf(null);

    }

}
