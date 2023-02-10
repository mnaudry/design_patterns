<?php
namespace Mnaudry\Patterns\StructuralPatterns\Bridge;

use Mnaudry\Patterns\StructuralPatterns\Bridge\Renderer;

abstract class Page {

    public Renderer $renderer;

    public function __construct(Renderer $renderer) {
        $this->renderer = $renderer;
    }

    public function changeRenderer(Renderer $renderer) {
        $this->renderer = $renderer ;
    }

    abstract public function view() ;
}