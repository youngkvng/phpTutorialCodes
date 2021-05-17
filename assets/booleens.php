<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booleens</title>
</head>
<body>
    <?php $result1 = true;
          $result2 = false;  ?>
    Result1: <?php echo $result1 ?><br>
    Result2: <?php echo $result2 ?><br>
    Result2 is booleens?: <?php echo is_bool($result2); ?><br>
    Result1 is booleens?: <?php echo is_bool($result1); ?><br>
    <br>
    <?php $number = 8; 
        if (is_float($number)) {
            echo $number . " " . "is a float";
        }else {
            echo $number . " " . "Is an integer";
        }
    ?>
</body>
</html>