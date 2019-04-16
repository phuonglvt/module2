<?php
include_once ('rectangle.php');
include_once ('Resizeable.php');
include_once ('colorable.php');
class Square extends Rectangle implements Resizeable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }
    public function resize($percent){
        return ($this->width * $this->width) * $percent;
    }
}
?>