<?php 

use Repository\ProjectRepository;

spl_autoload_register(function($className) {
    
    $path = __DIR__ . DIRECTORY_SEPARATOR . 
                    str_replace("\\", DIRECTORY_SEPARATOR, $className) . ".php";
    require_once $path;
});



$projectRepository = new ProjectRepository([
        "Make a project one", 
        "Make a project two", 
        "Another project"
    ]
);

$project =  $projectRepository->findById(1);
$project->addTask("Create repository");
$project->addTask("Code");
$project->addTask("Code...");
$project->addTask("Commit");
$project->addTask("Push into repo, make pull request");


$project2 = new Project("Project 2");
$projectRepository->add($project2);

$projectCnt = count($projectRepository);
var_dump($projectCnt);






