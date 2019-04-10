<?php
include_once ('point.php');
class MoveablePoint extends Point
{
    private $xSpeed;
    private $ySpeed;
    public function __construct($x = 0.0, $y = 0.0, $xSpeed = 0.0, $ySpeed = 0.0)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    function getxSpeed()
    {
        return $this->xSpeed;
    }
    public function setxSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }
    function getySpeed()
    {
        return $this->ySpeed;
    }
    public function setySpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public function setSpeed($x, $y, $xSpeed, $ySpeed)
    {
        $this->x = $x;
        $this->y = $y;
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getSpeed()
    {
        return array("X" => $this->x, "Y" => $this->y, "Xspeed" => $this->xSpeed, "Yspeed" => $this->ySpeed);
    }
    public function toString()
    {
        return "xy=" . "($this->x,$this->y)" . "</br>" . "speed=" . "($this->xSpeed,$this->ySpeed)";
    }
    public function move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return $this;
    }
}

?>