<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>



<body>
    <form method="post" action="kalkulator.php">
        <input type="text" name="number1">
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
        </select>
        <input type="text" name="number2">
        <button type="submit">=</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $operator = $_POST["operator"];

        if ($operator == "add") {
            $result = $number1 + $number2;
        } else {
            $result = $number1 - $number2;
        }

        echo $result;
    }
    ?>
</body>

</html>