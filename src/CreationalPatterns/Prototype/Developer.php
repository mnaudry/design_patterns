<?php
namespace Mnaudry\Patterns\CreationalPatterns\Prototype;

use Mnaudry\Patterns\CreationalPatterns\Prototype\Project;

class Developer {
    private string $name;
    private array $projects = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getName():string {
        return $this->name;
    }

    public function addOwnedProject(Project $project){
        $this->projects[] = $project;
    }

 
    public function getOwnedProjects(): array {
        return $this->projects;
    }
}