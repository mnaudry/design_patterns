<?php
namespace Mnaudry\Patterns\StructuralPatterns\Bridge;

use Mnaudry\Patterns\StructuralPatterns\Bridge\Renderer;

class JSONRenderer implements Renderer {

 
    public function renderHeader(): string{
        return "";
    }
    public function renderFooter(): string{
        return "";
    }
    public function renderTitle(string $title) : string {
        return '"title":"'.$title.'"';
    }
    public function renderTextBlock(string $content): string{

        return '"content":"'.$content.'"';
    }
    public function renderParts(array $parts) : string {
   
        return "{".implode(",",array_filter($parts))."}";
    }
    public function renderImage(string $image_url , string $title) : string {
        return 'image : {"url":"'.$image_url.'" , "title" : "'.$title.'"}';
    }
    public function renderLink(string $url , string $title) : string {

        return 'link : {"url":"'.$url.'" , "title" : "'.$title.'"}';
    }
}