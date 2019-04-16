<?php
class Point2D{
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

$run = new Point2D(12, 40);
foreach ($run->getXY() as $value => $result) {
    echo $value . "=" . $result . "</br>";
}

include_once ('point3D.php');

$run2 = new Point3D();
$run2->setXYZ(20, 40, 50);
foreach ($run2->getXYZ() as $value => $result) {
    echo $value . "=" . $result . "</br>";
}
?>