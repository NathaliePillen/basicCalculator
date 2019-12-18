<?php
declare (strict_types = 1);
include 'includes/classAutoload.inc.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic Calculator</title>
</head>
<body>


<form action="includes/calc.inc.php" method='post'>
<p>My calculator</p>
<input type="number" name="num1" placeholder="First Number">
<select name = "oper">
    <option value="add">Addition</option>
    <option value="sub">Substraction</option>
    <option value="mul">Multiplication</option>
    <option value="div">Division</option>
</select>
<input type="number" name="num2" placeholder="Second Number">
<button type="submit" name="submit" >Calculate</button>    
</form>


</body>
</html>