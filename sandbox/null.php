<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Null and Empty</title>
</head>
<body>
    <?php $var1 = null;
          $var2 = "";
          $var3 = "0"; ?>
    Var1 null?: <?php echo is_null($var1); ?><br>
    Var2 null?: <?php echo is_null($var2); ?><br>
    Var3 null?: <?php echo is_null($var3); ?><br>
    <br>
    Var1 is set?: <?php echo isset($var1); ?><br>
    Var2 is set?: <?php echo isset($var2); ?><br>
    Var3 is set?: <?php echo isset($var3); ?><br>
    <br>
    Var1 empty?: <?php echo empty($var1); ?><br>
    Var2 empty?: <?php echo empty($var2); ?><br>
    Var3 empty?: <?php echo empty($var3); ?><br>

</body>
</html>