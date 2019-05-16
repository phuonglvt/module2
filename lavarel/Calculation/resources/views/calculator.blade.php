<html>
<head>
    <title>Simple PHP Calculator</title>
</head>
<body>
<form method='post' action = "calculator">
    @csrf
    <input type='text' name='value1'></br>

    <select name='action'></br>
        <option value="ADDITION">ADDITION</option>
        <option value="MULTIPLICATION">MULTIPLICATION</option>
        <option value="SUBTRACTION">SUBTRACTION</option>
        <option value="DIVISION">DIVISION</option>
    </select></br>

    <input type='text' name='value2'></br>
    <input type="submit" name="submit" value='Calculate Now'>
</form>
    Result : {{$result}}
</body>
</html>