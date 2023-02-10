<?php
namespace Mnaudry\Patterns\StructuralPatterns\Bridge;

use Mnaudry\Patterns\StructuralPatterns\Bridge\Page;
use Mnaudry\Patterns\StructuralPatterns\Bridge\Renderer;

class SimplePage extends Page {
    public string $title;
    public string $content;
    public function __construct(Renderer $renderer, string $title, string $content )
    {
        $this->title = $title;
        $this->content = $content;
        parent::__construct($renderer);
    }

    public function view()
    {
        return  trim($this->renderer->renderParts(
            [
                $this->renderer->renderHeader(),
                $this->renderer->renderTitle($this->title),
                $this->renderer->renderTextBlock($this->content),
                $this->renderer->renderFooter(),
            ]
        ));
    }
}