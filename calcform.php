<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="function.php" method="POST">
        num1:<input type="number" name="num1" placeholder="ENTER">
        op:<select name="oper">
            <label>Choose operatiom</label>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value="/">/</option>
        </select>
        num2:<input type="number" name="num2" placeholder="ENTER">
        <button type="submit" name="Calculate">Calculate</button>
    </form>
</body>
</html>
