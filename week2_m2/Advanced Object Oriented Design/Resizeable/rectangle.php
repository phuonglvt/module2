<?php
include_once ('shape.php');
include_once ('Resizeable.php');
include_once ('colorable.php');
class Rectangle extends Shape implements Resizeable
{
    private $width;
    private $height;
    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(){
        return $this->height * $this->width;
    }

    public function calculatePerimeter(){
        return ($this->height + $this->width) * 2;
    }

    public function resize($percent){
        return ($this->height * $this->width) * $percent;
    }
}
?>