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
        <br>
        <?php 
        $year = 2013;
            switch (($year - 4) % 12) {
                case '0':   $zodiac = 'Rat';      break;
                case '1':   $zodiac = 'Ox';       break;
                case '2':   $zodiac = 'Tiger';    break;
                case '3':   $zodiac = 'Rabbit';   break;
                case '4':   $zodiac = 'Dragon';   break;
                case '5':   $zodiac = 'Snake';    break;
                case '6':   $zodiac = 'Horse';    break;
                case '7':   $zodiac = 'Goat';     break;
                case '8':   $zodiac = 'Monkey';   break;
                case '9':   $zodiac = 'Rooster';  break;
                case '10':  $zodiac = 'Dog';      break;
                case '11':  $zodiac = 'Pig';      break;                                      
            }
        echo "{$year} is the year of the {$zodiac}."; 
    ?>
    <br>
    <?php 
    $userType = 'customer';
    switch ($userType) {
        case 'student': echo 'welcome!'; break;
        case 'press': echo 'greetings!'; break;
        case 'customer': echo 'hello!'; break;
    }
    ?>
    <br><br>
    <?php 
    $userType = 'student';
    switch ($userType) {
        case 'student': 
        case 'press':   
        case 'customer': 
        echo 'Hello';
    }
    ?> 

</body>
</html>