<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Integers</title>
</head>
<body>
    <?php
        $num1 = 3;
        $num2 = 4;
    ?>
    <br>
    Basic Math: <?php echo ((2 + 1 + $num1)  * $num2) / 2 - 5; ?>
    <br>
    <br>
    Absolute value: <?php echo abs(0 - 300); ?> <br>
    Exponential: <?php echo exp(8); ?> <br>
    Power: <?php echo pow(2, 8); ?> <br>
    Square root: <?php echo sqrt(100); ?> <br>
    Modulo: <?php echo fmod(20, 7); ?> <br>
    Random: <?php echo rand(); ?> <br>
    Random (min, max): <?php echo rand(1, 10); ?> <br>
    <br>
    += <?php $num2 += 4; echo $num2; ?><br>
    -= <?php $num2 -= 4; echo $num2; ?><br>
    *= <?php $num2 *= 4; echo $num2; ?><br>
    /= <?php $num2 /= 4; echo $num2; ?><br>
    <br>
    Increment: <?php $num2++; echo $num2; ?><br>
    Decrement: <?php $num2--; echo $num2; ?><br>
</body>
</html>