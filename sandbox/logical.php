<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        $a = 4;
        $b = ;

        if ($a > $b) {
            echo "a is larger than b";
        }elseif ($a < $b) {
            echo "a is smaller than b";
        }else {
            echo "a is equal to b";
        };
    ?>
    <br>
    <?php
        $newUser = true;
        if ($newUser) {
            echo "<h1>Welcome</h1>";
            echo "<p>we are glad you joined us.</p>";
        };
    ?><br>
    <?php
        $numerator = 20;
        $denominator = 10;
        $result = 0;
        if ($denominator > 0) {
            $result = $numerator / $denominator;
        };
        echo $result;
    ?>

</body>
</html>