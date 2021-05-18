<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loops: Foreach</title>
</head>
<body>
    <?php
    $ages = array(4, 8, 15, 16, 23, 42);
        foreach ($ages as $age ) {
           echo "Ages: $age <br>";
        }
    ?>
    <br>
    <?php
        $person = array (
            'surName' => 'Oguka',
            'firstName' => 'Francis',
            'location' => 'owerri',
            'age' => '18',
            'zipCode' => 3056
       );
       foreach ($person as $key => $value) {
           echo "{$key} : {$value} <br>";
       }
    ?>
    <br>
    <?php 
        $prices = array(
            'Brand new computer: ' => 2000,
            '1 month of lydia.com: ' => 50,
            'Learning PHP: ' => null
        );
        foreach ($prices as $items => $cost) {
            echo $items;  
            if (is_int($cost)) {
                echo "$" . $cost;       
            }else {
                echo "priceless";
            }
            echo "<br>";
        }
    ?>
</body>
</html>