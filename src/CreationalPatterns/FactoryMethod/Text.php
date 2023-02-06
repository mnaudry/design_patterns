<?php
namespace Mnaudry\Patterns\CreationalPatterns\FactoryMethod;
 use Mnaudry\Patterns\CreationalPatterns\FactoryMethod\Page;

 class Text implements Page {

    protected ?string $data;

    public function __construct(?string $data){
        $this->data = $data;
    }

    public function setData(?string $data):void{

        $this->data = $data;
    }

    public function create()
    {
        printf("Text file has been created successfully with data : %s",$this->data);
    }

 }