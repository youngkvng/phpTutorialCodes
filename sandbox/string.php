<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String</title>
</head>
<body>
    <?php 
    echo "hello world<br>";
    echo 'hello world<br>';
    
    $greeting = "hello";
    $target = "world";
    $phrase = $greeting . " " . $target;
    echo $phrase;
    ?> 
    <br>

    <?php
    echo "$phrase again <br>";
    // using a single quote won't work in this case as u can see below.
    echo '$phrase again</br>';
    // but u most probably will use this one below.
    echo "{$phrase}again"
    ?>
    
</body>
</html>