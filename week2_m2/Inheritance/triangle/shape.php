<?php
class Shape{
    protected $side1;
    protected $side2;
    protected $side3;

    public function __construct($side1=1.0,$side2=1.0,$side3=1.0){
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function setSide($side1,$side2,$side3){
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function getSide(){
        return array("side1" => $this->side1, "side2" => $this->side2, "side3" => $this->side3);
    }

    public function toString(){
        return "($this->side1,$this->side2,$this->side3)";
    }
}

include_once ('triangle.php');
$triangle = new Triangle();
$triangle->setSide(30, 40, 50);
$triangle->setColor("yellow");
foreach ($triangle->getTriangle() as $value => $key)
{
    echo $value . "=" . $key . "</br>";
}

echo "Area: ".$triangle->getArea()."<br>";
echo "Perimeter: ".$triangle->getPerimeter();
?>
