<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Discount</title>
    <link rel="stylesheet" href="">
    <style>
        #content{
            width: 450px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 2px solid navy;
        }

        h1{
            color: navy;
        }

        label{
            width: 10em;
            padding-right: 1em;
            float: left;
        }

        #data input{
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }

        #buttons input{
            float: left;
            margin-bottom: .5em;
        }
        br{
            clear: left;
        }
    </style>
</head>
<body>
<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $result = $price * $discount * 0.01;
        $discountPrice = $price - $result;
    }
    echo "<div id='content'>";
    echo "<h1>Product Discount Calculator</h1>";
    echo "<label>Product Description: </label>";
    echo "<span>".$name."</span><br/>";
    echo "<label>Price: </label>";
    echo "<span>$".$price."</span><br/>";
    echo "<label>Discount Percent: </label>";
    echo "<span>".$discount."%</span><br/>";
    echo "<label>Discount Amount: </label>";
    echo "<span>$".$result."</span><br/>";
    echo "<label>Discount Price: </label>";
    echo "<span>$".$discountPrice."</span><br/>
        </div>";

?>
</body>
</html>