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
<div id="content">
    <h1>Product Discount Calculator</h1>
    <form method="post" action="product_Discount.php">
        <div id="data">
            <label>Product Description:</label>
            <input type="text" name="name"/><br/>
            <label>List Price:</label>
            <input type="text" name="price"/><br/>
            <label>Discount Percent:</label>
            <input type="text" name="discount"/>(%)<br/>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" name="submit" value="Calculate Discount"/>
        </div>
    </form>
</div>
</body>
</html>