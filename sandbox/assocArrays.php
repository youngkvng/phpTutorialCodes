<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Associative Arrays</title>
</head>
<body>
    <?php 
        $assocArrays = array('firstName' => 'francis', 'lastName' => 'chimaobi', 'surName' => 'oguka');
    ?>
    <?php echo $assocArrays['firstName'] ?><br>
    <?php echo $assocArrays['lastName'] ?><br>
    <?php echo $assocArrays['surName'] ?><br>
    <?php echo $assocArrays['surName'] . ' ' . $assocArrays['firstName'] . ' '. $assocArrays['lastName'] ?><br>
</body>
</html>