<?php
include_once('animal.php');
class Chicken extends Animal
{
    public function makeSound()
    {
        return "Chicken: cluck-cluck!";
    }
}
?>
