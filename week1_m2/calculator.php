<html>
<head>
    <title>Simple PHP Calculator</title>
</head>
<body>
<form method='post' action="calculator.php">
    <input type='text' name='value1'></br>
    <select name='action'></br>
        <option>Addition</option>
        <option>Subtraction</option>
        <option>multiplication</option>
        <option>division</option>
    </select></br>
    <input type='text' name='value2'></br>
    <input type="submit" name="submit" value='Calculate Now'></form>

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
</html>