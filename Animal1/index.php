<?php
include_once "eni/Animal1.php";
include_once "eni/Fruit.php";
include_once "Edible.php";
include_once "animal/Chicken.php";
include_once "animal/Tiger.php";
include_once "fruit/Apple.php";
include_once "fruit/Orange.php";

$animals = new Chicken();
$animals1 = new Tiger();
echo $animals->makeSound();

echo "--eni--";
foreach ($animals as $animal) {
    echo $animal->makeSound(). "<br/>";
    if ($animal instanceof Chicken) {
        $animal->howToEat();
    }
}
;

$fruits[0] = new Orange();
$fruits[1] = new Apple();

echo "--Fruit";
foreach ($fruits as $fruit) {
    echo $fruit->howToEat();
}