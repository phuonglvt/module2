<?php
include_once ('point2D.php');
class Point3D extends Point2D{
    private $z;
    public function __construct($x = 0.0, $y = 0.0, $z = 0.0)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }
    function getZ()
    {
        return $this->z;
    }
    public function setZ($z)
    {
        $this->z = $z;
    }
    public function setXYZ($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    public function getXYZ()
    {
        return array("X" => $this->x, "Y" => $this->y, "Z" => $this->z);
    }
    public function toString()
    {
        return "($this->x,$this->y,$this->z)";
    }
}
?>