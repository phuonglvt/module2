<html>
<head>
    <title></title>
</head>
<body>
<form method='post'>
    USD: <input type='number' name='usd'></br>
    <input type="submit" name="submit" value='Change'></form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['submit'])){
        $usd = $_POST['usd'];
        $rate = 23000;
        echo $usd * $rate . " VND";
        echo '<a href="'.$_SERVER['PHP_SELF'].'">Thử lại</a>';
    }
}
?>
</body>
</html>