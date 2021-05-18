<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Continue</title>
</head>
<body>
    <?php 
        for ($count = 0; $count <= 10; $count++) { 
           if ($count == 5) {
               continue;
           }
           echo $count . ",";
        }    
    ?>
</body>
</html>