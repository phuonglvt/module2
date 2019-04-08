<?php

const slow = 1;
const medium = 2;
const fast = 3;

class fanMachine
{
    public $speed = slow;
    public $switch = false;
    public $radius = 4;
    public $color = "blue";

    public function setFan($speed, $radius, $color, $switch)
    {
        $this->speed = $speed;
        $this->radius = $radius;
        $this->color = $color;
        $this->switch = $switch;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getStatus()
    {
        return $this->switch;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getColor()
    {
        return $this->color;
    }

}

$fan = new fanMachine();
$fan->setFan(medium, 4, "black", false);
if ($fan->getStatus() === true) {
    echo "Fan is turn on" . "<br>";
    echo "Speed: " . $fan->getSpeed() . "<br>";
    echo "Radius: " . $fan->getRadius() . "<br>";
    echo "Color: " . $fan->getColor() . "<br>";
} else {
    echo "Fan is turn off" . "<br>";
    echo "Radius: " . $fan->getRadius() . "<br>";
    echo "Color: " . $fan->getColor() . "<br>";
}
?>
