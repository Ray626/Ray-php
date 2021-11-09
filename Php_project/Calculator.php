<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="GET">
    <label>
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
    </label>
    <br>
    <label>
        <select name="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
    </label>
    <br>
    <button name="submit">Calculate</button>
</form>

<?php
if(isset($_GET['submit'])){
    $num1= $_GET['num1'];
    $num2= $_GET['num2'];
    $value = $_GET['operation'];
    if($num1 == null && $num2 == null){
        echo "No input";
    }
    else{
        switch ($value){
            case "+":
                echo $num1 + $num2;
                break;
            case "-":
                echo $num1 - $num2;
                break;
            case "*":
                echo $num1 * $num2;
                break;
            case "/":
                if ($num2 != 0){
                    echo $num1 / $num2;
                }
                else{
                    echo "Math Error";
                }
                break;

            default:
                echo "nothing";
        }
    }


}

?>

</body>
</html>
