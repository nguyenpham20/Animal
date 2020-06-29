<?php
include_once "../Edible.php";


class Fruit implements Edible {
    public function howToEat()
    {
        return "Could be";
    }
}
