<?php
$snt = 10000;
for ($i = 0; $i<$snt; $i++){
    if (isPrime($i)==true){
        echo "$i<br>";
    }
}
    function isPrime($snt) {
        if ($snt<2){
            return false;
        } else {
            for ($i =2; $i<$snt; $i++){
                if ($snt%$i==0){
                    return false;
                }
            }
        } return true;
    }
?>