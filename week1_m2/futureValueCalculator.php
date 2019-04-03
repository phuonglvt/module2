<!DOCTYPE HTML>
<html>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<head>
    <title>Future Value Calculator</title>
</head>
<body>
    <form method="Post" action="chuyentrang.php">
        <div>Inventment Amount:<input type="number" name="sodautien"></div>
        <div>Yearly Interest Rate:<input type="number" name="sothuhai"></div>
        <div>Number of Years:<input type="number" name="sothuba"></div>
    <input type="submit" name="submit" value="Calculator">
    </form>
    <?php
    if (isset($_POST['submit']))
    {
        $sodautien = $_POST["sodautien"];
        $sothuhai = $_POST["sothuhai"];
        $sothuba = $_POST["sothuba"];
        $Calculator = $sodautien + ($sodautien * $sothuhai * 0.01);
    }
    echo "<table>
 			<thead>
 				<tr>
 					<th>Máy tính giá trị tương lai</th>
 				</tr>
 			</thead>
 			<tbody>
 				<tr>
 					<td><span style='color:red'>Số tiền đầu tư: $$sodautien</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:red'>Lãi suất hằng năm: $sothuhai %</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:red'>Số năm: $sothuba</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:red'>Giá trị tương lai: $Calculator</span></td>
 				</tr>
 			</tbody>
 		</table>"
    ?>
</body>
</html>
