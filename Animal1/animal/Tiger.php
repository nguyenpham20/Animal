<?php
include_once("../eni/Animal1.php");

class Tiger extends Animal
{
    public function makeSound()
    {
        return "Roarrrrr!";
    }

}
$b = new Tiger();
echo $b->makeSound();