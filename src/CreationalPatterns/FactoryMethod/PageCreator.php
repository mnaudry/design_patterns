<?php
namespace Mnaudry\Patterns\CreationalPatterns\FactoryMethod;

abstract class PageCreator {
    abstract public function getCreator();

    public function create($data) {
        $pageCreator = $this->getCreator();
        $pageCreator->setData($data);
        $pageCreator->create();

    }

}