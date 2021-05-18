<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Type Juggling and Type Casting</title>
</head>
<body>
    Type Juggling <br><br>
    <?php $count = "2"; ?>
    Type: <?php echo gettype($count); ?>
    <?php $count += 3; ?><br>
    <?php echo gettype($count); ?><br>
    <?php $cat = "I have" . $count . "cats."; ?>
    Cats: <?php echo gettype($cat); ?><br>
    <br>
    Type Casting <br><br>
    <?php settype($count, "integer"); ?>
    Count: <?php echo gettype($count); ?>
</body>
</html>