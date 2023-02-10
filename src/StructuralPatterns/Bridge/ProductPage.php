<?php
namespace Mnaudry\Patterns\StructuralPatterns\Bridge;

use Mnaudry\Patterns\StructuralPatterns\Bridge\Page;
use Mnaudry\Patterns\StructuralPatterns\Bridge\Product;
use Mnaudry\Patterns\StructuralPatterns\Bridge\Renderer;

class ProductPage extends Page {

    public Product $product;
    public function __construct(Product $product , Renderer $renderer){
        $this->product = $product;
        parent::__construct($renderer);
    }
    public function view()
    {
        return trim($this->renderer->renderParts([
            $this->renderer->renderHeader(),
            $this->renderer->renderTitle($this->product->getTtile()),
            $this->renderer->renderTextBlock($this->product->getDescription()),
            $this->renderer->renderImage($this->product->getImage(),$this->product->getTtile()),
            $this->renderer->renderLink($this->product->getUrl(),$this->product->getTtile()),
            $this->renderer->renderFooter()
        ]));
    }
}