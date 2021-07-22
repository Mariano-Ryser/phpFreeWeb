<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Style/css.css">
        <title>Document</title>
    </head>
    <body>
    <?php include("Head.php") ?>
    <br><br><br>
        <h1>How to do basic calculations in php:</h1>
        <p>Addition, Subtraction, Multiplication and Division</p>
        <?php
            echo "a is 2 and b is 3<br>";
            $a = 2;
            $b = 3;
            echo "<br>a + b = ???<br>";
            echo "$a + $b = ???<br>";
            echo "$a + $b = " . ($a + $b) . "<br>";

            echo "<br>a - b = ???<br>";
            echo "$a - $b = ???<br>";
            echo "$a - $b = " . ($a - $b) . "<br>";

            echo "<br>a x b = ???<br>";
            echo "$a * $b = ???<br>";
            echo "$a * $b = " . ($a * $b) . "<br>";

            echo "<br>a ÷ b = ???<br>";
            echo "$a / $b = ???<br>";
            echo "$a / $b = " . ($a / $b) . "<br>";

            echo "<br>Powers and finding remainders (Rest) after divisions (ignoring the result of the division)<br>";
            echo "<br>a ^ b = ??? (^ = 'to the power of' / 'hoch')<br>";
            echo "$a ** $b = ???<br>";
            echo "$a ** $b = " . ($a ** $b) . "<br>";

            echo "<br>a / b = ... -> remainder/Rest???<br>";
            echo "$a % $b = ???<br>";
            echo "$a % $b = " . ($a % $b) . "<br>";

            echo "<br>Attention when mixing full stops ('.') into defintions of multiple variables in an attempt to concatenate (just like i did earlier):<br>";
            echo "c = 5 and d = 7 and e = 11<br>";
            $c = 5 . $d = 7 . $e = 11;
            echo "c + d + e<br>";
            echo "$c + $d + $e<br>";








            include("Footer.php")
        ?>
    </body>
</html>