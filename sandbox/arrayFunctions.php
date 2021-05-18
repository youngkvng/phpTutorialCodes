<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Functions</title>
</head>
<body>
    <?php $numbers = array(8,23,15,42,16,4);?> 
    count: <?php echo count($numbers); ?><br>
    max value: <?php echo max($numbers); ?><br>
    min value: <?php echo min($numbers); ?><br>
    <pre>
    sort: <?php  sort($numbers); print_r ($numbers); ?><br>
    reverse sort: <?php rsort($numbers); print_r ($numbers) ?><br>
    </pre>
    implode: <?php echo $numString = implode(" * ", $numbers); ?><br>
    explode: <?php print_r(explode(" * ", $numString)); ?><br>
    15 in array: <?php echo in_array(15, $numbers); ?><br>
    19 in array: <?php echo in_array(19, $numbers); ?><br>
</body>
</html>