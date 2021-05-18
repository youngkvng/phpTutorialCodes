<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions: Return Values</title>
</head>
<body>
    <?php 
        function add($var1, $var2){
            $sum = $var1 + $var2; 
            return $sum;
        }
        $result1 = add(4, 6);
        $result2 = add(5, $result1);
        echo $result2;
    ?>
    <br>
    <?php 
        function chineseZodiac($year){
            switch (($year - 4) % 12) {
                case '0':   return 'Rat';      
                case '1':   return 'Ox';       
                case '2':   return 'Tiger';    
                case '3':   return 'Rabbit';   
                case '4':   return 'Dragon';   
                case '5':   return 'Snake';    
                case '6':   return 'Horse';    
                case '7':   return 'Goat';     
                case '8':   return 'Monkey';   
                case '9':   return 'Rooster';  
                case '10':  return 'Dog';      
                case '11':  return 'Pig';                     
                default:                       
            }
        }
        $zodiac = chineseZodiac('2013');
        echo "2013 is the year of the {$zodiac} <br>";
        echo "2015 is the year of the" . " " . chineseZodiac('2015');
    ?>
    <br>
    <?php 
    $year = 3043;
    echo ($year + 4) % 12;
    ?>
    <br><br>
    <?php
        function betterHello($greeting, $target, $punctuation) {
        return $greeting . " " . $target . $punctuation;
        }
        echo betterHello("Hello", 'Francis Chima', "!");
    ?>
</body>
</html>