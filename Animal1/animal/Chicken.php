<?php
include_once "../eni/Animal1.php";
include_once "../Edible.php";


class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
        return "o o o";
    }

    public function howToEat()
    {
        return "could be fried";
    }
}
$a = new Chicken();
echo $a->makeSound();