<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions: Argument</title>
</head>
<body>
    <?php 
        function sayHelloTo($name){
            echo "Hello $name"; 
        }
        sayHelloTo("francis");
    ?>
    <br>
    <?php 
        $name = "Francis";
        function betterHello($greeting, $target, $punctuation) {
            echo $greeting . " " . $target . $punctuation;
        }
        betterHello("Hello", $name, "!!!");
    ?>
</body>
</html>