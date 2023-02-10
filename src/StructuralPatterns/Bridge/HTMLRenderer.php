<?php
namespace Mnaudry\Patterns\StructuralPatterns\Bridge;

use Mnaudry\Patterns\StructuralPatterns\Bridge\Renderer;

class HTMLRenderer implements Renderer {

    private $title;
    private $footer;
    private $header;
    public  function __construct($title,$lang) {
        
        $this->title = $title ;
       
        $this->header = <<<HEADER
        <!DOCTYPE html><html lang="$lang"><head><meta name="viewport" content="width=device-width, initial-scale=1"><title>$this->title</title></head><body>
        HEADER;

        $this->footer = <<<FOOTER
        </body></html>
        FOOTER;
    }

    public function renderHeader() : string
    {
        return $this->header; 
    }

    public function renderFooter(): string {

        return $this->footer; 
    }
    public function renderTitle(string $title) : string {
        return <<<TITLE
        <h1>$title</h1>
        TITLE;
    }
    public function renderTextBlock(string $content): string{

        return <<<TEXT
        <div class="text">$content</div>
        TEXT;
    }
    public function renderParts(array $parts) : string {

        return implode("",$parts);
    }

    public function renderLink(string $url, string $title): string
    {
        return <<<LINK
        <a href="$url" alt="$title">$title</a>
        LINK;
    }

    public function renderImage(string $image_url , string $title): string {
        return <<<IMAGE
        <img src="$image_url" alt="$title"/>
        IMAGE;
    }

}