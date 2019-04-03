<?php
if(isset($_POST['submit'])){
    $value1 = $_POST['value1'];
    $value2 = $_POST['value2'];
    $action = $_POST['action'];
    if($action=="Addition"){
        echo "<b>Result:</b><br>";
        echo $value1+$value2;
    }
    if($action=="Subtraction"){
        echo "<b>Result:</b><br>";
        echo $value1-$value2;
    }
    if($action=="multiplication"){
        echo "<b>Result:</b><br>";
        echo $value1*$value2;
    }
    if($action=="division"){
        echo "<b>Result:</b><br>";
        echo $value1/$value2;
    }
}
?>

</body>