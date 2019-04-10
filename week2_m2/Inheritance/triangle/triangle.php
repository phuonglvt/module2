<?php
include_once ('shape.php');
class Triangle extends Shape{
    private $color;
    public function __construct($side1 = 1.0, $side2 = 1.0, $side3 = 1.0, $color = "red")
    {
        parent::__construct($side1, $side2, $side3);
        $this->color = $color;
    }
    function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getArea()
    {
        $s = ($this->side1 + $this->side2 + $this->side3) / 2;
        return sqrt($s * ($s - $this->side1) * ($s - $this->side2) * ($s - $this->side3));
    }

    public function getPerimeter()
    {
        return $this->side1 + $this->side2 + $this->side3;
    }

    public function getTriangle()
    {
        return array("side1" => $this->side1, "side2" => $this->side2, "side3" => $this->side3, "color" => $this->color);
    }

}
?>