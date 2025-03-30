<?php
header("Content-Type: application/json");

class student
{
    public $name;
    public $gemiddeldeCijfer;
}

class dataObject
{
    public $studenten;
}




$mario = new student();
$mario->name="mario";
$mario->gemiddeldeCijfer=8;

$wario = new student();
$wario->name="wario";
$wario->gemiddeldeCijfer=4.5;

$bowser = new student();
$bowser->name="bowser";
$bowser->gemiddeldeCijfer=10.5;

$peach = new student();
$peach->name="peach";
$peach->gemiddeldeCijfer=8.5;

$dataObject = new dataObject();
$dataObject->studenten = [$mario,$bowser,$peach,$wario];

$jsonString = json_encode($dataObject);
echo $jsonString;
?>