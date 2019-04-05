<?php
$array = array(
    array(3,2,1,7),
    array(4,5,6,9));
$max = $array[0][0];
for ($i = 0;$i< 2;$i++){
    for($j=0;$j< 4;$j++)
        if($array[$i][$j]>$max)
            $max = $array[$i][$j];}
echo "Giá trị lớn nhất trong mảng 2 chiều là: ".$max;
?>