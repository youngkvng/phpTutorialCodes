<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions: Multiple Return</title>
</head>
<body>
    <?php
    function addSub($var1, $var2){
        $add = $var1 + $var2;
        $sub = $var1 - $var2;
        $multiply = $var1 * $var2;
        $divide = $var1 / $var2;
        $modulo = $var1 % $var2;
        return array($add, $sub, $multiply, $divide, $modulo);
    }
    $resultArray = addSub(10, 5);
    echo "Add: $resultArray[0] . <br>";
    echo "Sub: $resultArray[1] . <br>";
    echo "Multiply: $resultArray[2] . <br>";
    echo "Divide: $resultArray[3] . <br>";
    echo "Modulo: $resultArray[4] . <br><br>";
    list($addResult, $subResult, $multiplyResult, $divideResult, $moduloResult) = addSub(20, 5);
    echo "Add: $addResult . <br>";
    echo "Sub: $subResult . <br>";
    echo "Multiply: $multiplyResult . <br>";
    echo "Divide: $divideResult . <br>";
    echo "Modulo: $moduloResult . <br>";
    ?>

</body>
</html>