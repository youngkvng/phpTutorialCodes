<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switcht</title>
</head>
<body>
    <?php
        $a = 3;
        switch ($a) {
            case '1':
               echo "a is equal to 1";
                break;
            case '2':
                echo 'a is equal to 2';
                break;            
            default:
                echo 'a is undefined';
                break;
        }
        ?>
</body>
</html>