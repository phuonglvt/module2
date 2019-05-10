<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<style>
		#content {
			width: 450px;
			margin: 2 auto;
			padding: 0px 20px 20px;
			background: white;
			border: 2px solid navy;
		}

		h1 {
			color: navy;
		}

		label {
			width: 10em;
			padding-right: 1em;
			float: left;
		}

		#data input {
			float: left;
			width: 15em;
			margin-bottom: .5em;
		}

		#buttons input {
			float: left;
			margin-bottom: .5em;
		}

		br {
			clear: left;
		}
	</style>
</head>
</head>


<body cz-shortcut-listen="true">
	<center>
	<div id="content">
		<h1>Product Discount Calculator</h1>
		<form method="post" action="/">
			@csrf
			<div id="data">
				<label>Product Description: </label>
				<input type="text" name="product_name""><br>
            <label>List Price:</label>
			<input type=" number" name="list_price"><br>
				<label>Discount Percent:</label>
				<input type="number" name="discount_percent"><br>

			</div>
			<div id="buttons">
				<label>&nbsp;</label>
				<input type="submit" name="submit" value="Caculator">
			</div>
	</br>
		</form>
	</div>
	</center>
</body>


</html>