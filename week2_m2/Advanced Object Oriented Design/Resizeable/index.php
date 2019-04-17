<?php
include_once ('circle.php');
include_once ('cylinder.php');
include_once ('rectangle.php');
include_once ('square.php');

$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle resizeable: ' . $circle->resize(2) . '<br /><br />';

$cylinder = new Cylinder('Cylinder 01', 3 , 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br /><br />';

$rectangle = new Rectangle('Rectangle 01', 3 , 4);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle resizeable : ' . $rectangle->resize(2) . '<br /><br />';

$square = new Square('Square 01', 4 , 4, 4);
echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
echo 'Rectangle resizeable: ' . $square->resize(4) . '<br />';
echo 'Square Colorable: ' . $square->howToColor() . '<br />';
?>