<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Style/css.css">
</head>

<body>


<?php include("Head.php") ?>
<br><br><br>
    <h1>Zeichenketten verbinden in php (String concatenation)</h1>
    <?php 

    $name = 'Peter';
    $str = 'Ich heisse ' . $name . '.';

    echo "\$str = 'Ich heisseeee ' . \$name . '.'" . '<br>';
    echo $str . '<br>';


?>
<?php include("Footer.php") ?>
</body>

</html>