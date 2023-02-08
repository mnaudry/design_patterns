<?php
namespace Mnaudry\Patterns\CreationalPatterns\Prototype;

use Mnaudry\Patterns\CreationalPatterns\Prototype\Developer;

class Project {
    private string $name;
    private ?string $repo;  
    private ?string $description; 
    private ?Developer $owner;
    private  $contributors = [];
    private array $comments = [];

    public function __construct($name,$repo,$description)
    {
        $this->name = $name;
        $this->repo = $repo;
        $this->description = $description;
    }
    public function __clone(){
        $this->name = "Copy of ".$this->name;
        $this->repo = "Copy of ".$this->repo;
        $this->description = "Copy of ".$this->description;
       // $this->owner = clone $this->owner;
        $this->owner->addOwnedProject($this);
    }

    public function getName():?string {
        return $this->name;
    }

    public function setName(string $name) {
        $this->repo = $name;
    }

    public function getRepo():?string {
        return $this->repo;
    }

    public function setRepo(string $repo) {
        $this->repo = $repo;
    }

    public function getDescription():?string {
        return $this->description;
    }

    public function setDescription(string $description) {
        $this->description = $description;
    }

    public function setOwner(Developer $owner){
        $this->owner = $owner;
        $this->owner->addOwnedProject($this);
    }
    public function getOwner():Developer {
        return $this->owner;
    }

    public function addContributor(Developer $contributor){
        $this->contributors[] = $contributor ;
    }

    public function removeContributor(Developer $contributor):array {
       
        $this->contributors = array_filter($this->contributors,function($cont) use ($contributor){
            return !($cont == $contributor);
        });

        return $this->contributors;
    }

    public function addComments(string $comment) {
        $this->comments[] = $comment;
    }

    public function removeComments(string $comment): array {
        $this->comments = array_filter($this->comments,function($com) use ($comment){
            return !($com == $comment);
        });

        return $this->comments;
    }
}