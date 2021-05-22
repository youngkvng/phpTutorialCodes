<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions: Default Argument Values</title>
</head>
<body>
    <?php 
    function paint($room = "office" /*default value set*/, $color = "red"/*default calue also set*/){
        return "The color of the {$room} is {$color}.<br>";
    }
    echo paint();//default value output. 
    echo paint("bedroom", "blue");//custome value output.
    ?>
    <br>
    
    <?php 
    // define('ERROR_REPORTING', "E_ALL";
    // ini_set('display_errors', 'on');
    //  error_reporting(E_All);
     ?>
     <a href="https://php.net/manual/en/errorfunc.constants.php">php error documentation</a>
     
</body>
</html>