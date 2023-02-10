<?php
namespace Mnaudry\Patterns\StructuralPatterns\Bridge;

class Product {
    private int $id;
    private string $slug;
    private string $title;
    private string $description;
    private string $image;
    private float $price;
    public function __construct(int $id, string $slug,string $title,string $description, string $image, float $price) {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->price = $price;
        $this->slug = $slug;
        $this->id = $id;
    }

    public function getId(): int{
        return $this->id;
    }

    public function getUrl(): string {
        return "http://example.com/add/".$this->slug;
    }

    public function getTtile():string {
        return $this->title;
    }


    public function getDescription():string {
        return $this->description;
    }

    public function getImage():string {
        return $this->image;
    }

    public function getPrice(): string {
        return $this->price;
    }
}