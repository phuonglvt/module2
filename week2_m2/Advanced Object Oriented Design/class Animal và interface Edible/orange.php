<?php
include_once('fruit.php');
class Orange extends Fruit
{
    public function howToEat()
    {
        return "Orange could be juiced";
    }
}
?>