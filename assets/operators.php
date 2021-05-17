<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comparason and Logical Operators</title>
</head>
<body>
    <?php 
        $a = 4;
        $b = 3;
        $c = 20;
        $d = 1;
        if (($a > $b) && ($c > $d)) {
            echo "a is larger than b AND ";
            echo "c is larger than d";
        }elseif (($a > $b) || ($c > $d)) {
            echo "a is larger than b";
        }else{
            
        }
    ?>
</body>
</html>