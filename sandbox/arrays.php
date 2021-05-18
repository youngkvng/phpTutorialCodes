<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
</head>
<body>
    <?php 
        $numbers = array(4,8,15,16,23,42);
        echo $numbers [1];
    ?>
    <br>
    <?php 
        $mixed = array(6, 'fox', 'dog',200, array('x', 'y', 'z',), array('my', 4, 'friends', array(2,3)));
    ?> 
    <br>
    <?php echo $mixed [2]?><br>
    <!-- <?php echo $mixed [3]?><br> -->
    <!-- <?php echo $mixed ?><br> -->
    <pre>
    <?php echo print_r ($mixed) ?></pre><br>
    <?php echo $mixed [3][1]?><br>
    <?php echo $mixed [5][3][0]?>

    
</body>
</html>