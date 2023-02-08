<?php
require_once __DIR__."/vendor/autoload.php";

use Mnaudry\Patterns\CreationalPatterns\Prototype\Developer;
use Mnaudry\Patterns\CreationalPatterns\Prototype\Project;


$project = new Project("prototype","repository","project prototype");

$developer1 = new Developer('kitenge');
$developer2 = new Developer('Jelani');
$developer3 = new Developer('jalia');

$project->addContributor($developer1);
$project->addContributor($developer2);
$project->setOwner($developer3);

$cloned_project = clone $project;

($project->getOwner())->setName("Jaja");

dump(count($project->getOwner()->getOwnedProjects()),$project->getOwner()->getName(),$project->getName());

dump(count($cloned_project->getOwner()->getOwnedProjects()),$cloned_project->getOwner()->getName(),$cloned_project->getName());



