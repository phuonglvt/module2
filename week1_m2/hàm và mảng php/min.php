<?php
$Mang = array(1,3,-3,15,7,-25);
$min = $Mang[0];
$index = 0
for ($i= 1;$i< count($Mang) ; $i++) {
    if ($Mang[$i] < $min  )
        $min = $Mang[$i] ;
}
echo "Giá trị nhỏ nhất của mảng là: ". $min;
echo "Chỉ số là: ".$index;
?>
