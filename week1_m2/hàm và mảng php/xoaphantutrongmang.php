<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Xóa một phần tử trong mảng</title>
</head>
<body>
<?php
    $array = [15,17,25,50,47,110,-125,114];
    $index = 0;

    function tryRemoveFromArray($array,$index) {
        for ($i = 0; $i < count($array); $i++) {
            if ($i == $index){
                unset ($array[$i]);
            }
        } print_r($array);
    }

    tryRemoveFromArray($array,$index);

?>
</body>
</html>