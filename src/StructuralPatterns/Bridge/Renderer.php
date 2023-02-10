<?php
namespace Mnaudry\Patterns\StructuralPatterns\Bridge;

interface Renderer {
    public function renderHeader(): string;
    public function renderFooter(): string;
    public function renderTitle(string $title) : string ;
    public function renderTextBlock(string $content): string;
    public function renderParts(array $parts) : string;
    public function renderImage(string $image_url , string $title) : string ;
    public function renderLink(string $url , string $title) : string ;

}