<?php
class Point

{
    protected $x;
    protected $y;

    public function __construct($x=0.0, $y=0.0){
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(){
        return $this->x;
    }

    public function setX($x){
        $this->x = $x;
    }

    public function getY(){
        return $this->y;
    }

    public function setY($y){
        $this->y = $y;
    }

    public function getXY(){
        return array("x" => $this->x, "y" => $this->y);
    }

    public function setXY($x,$y){
        $this->x = $x;
        $this->y = $y;
    }

    public function toString(){
        return "($this->x,$this->y)";
    }
}


$run = new Point(10, 20);
foreach ($run->getXY() as $value => $key) {
    echo $value . "=" . $key . "</br>";
}

include_once ('movePoint.php');
$run2 = new MoveablePoint();
$run2->setSpeed(20, 30, 50, 70);
$run2->move();
foreach ($run2->getSpeed() as $value => $key) {
    echo $value . "=" . $key . "</br>";
}
echo $run2->toString();
