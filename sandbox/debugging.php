<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Debugging</title>
</head>
<body>
<pre>
<?php
    $number = 99;
    $string = 'Bug?';
    $array = array(1 => 'Homepage', 2 => 'About Us', 3 => 'Services');
    print_r($array);                       //print_r
    echo $string . '<br><br><br>';                 //echo
    // print($number). '<br>';             //print

     //var_dump
    var_dump($number);                    
    var_dump($string);
    var_dump($array);
    echo '<br><br><br>';

    //get_defined_var
    print_r(get_defined_vars()) . '<br><br><br>';

    //debug_backtrace
    function sayHelloTo($name){
        echo "Hello $name";
        var_dump(debug_backtrace()); 
    }
    sayHelloTo("francis");
?>
<br>
<a href="https://xdegub.org">php debug documentation(Xdebug)</a>
<a href="https://www.php-debugger.com/dbg">php debug documentation(DBG)</a>
<a href="https://www.firephp.org">php debug documentation(firePHP)</a>
</pre>
</body>
</html>