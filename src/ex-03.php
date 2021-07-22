<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="Style/css.css">
</head>

<body>
<?php
$title = "<h1>Arrays</h1>";

echo $title;
$array = array("foo", "bar", "hello", "world");
echo '<pre>';
var_dump($array);
echo '</pre>';



echo "<br>";

echo ($array)[0]."<br>";
echo ($array)[1]."<br>";
echo ($array)[2]."<br>";
echo ($array)[3]."<br>"."<br>"."<br>";

$title1 = '<h1>Esto es foreach</h1>'."<br>"."<br>" ;
$title2 = '<h1>Esto es foreach mit switch</h1>'."<br>"."<br>" ;
echo $title1;


$person = [
    'Name' => 'Mariano',
    'Alter' => '29',
    'Wohnort' => 'Höng',
    'blalala' => ''
];



foreach ($person as $key => $value) {
    if($key == 'Name') {
        echo 'Er heisst ' . $value; 
    } elseif ($key == 'Alter') {
        echo 'Er ist ' . $value . ' Jahre alt'; 
    } elseif ($key == 'Wohnort') {
        echo 'Er lebt in ' . $value; 
    }
    echo '<br>';
}

echo $title2;

foreach ($person as $key => $value) {
    switch ($key) {
        case 'Name':
            echo 'Er heisst ' . $value; 
        break;
        case 'Alter':
            echo 'Er ist ' . $value . ' Jahre alt'; 
            break;
        case 'Wohnort':
            echo 'Er lebt in ' . $value; 
            ; 
        break;
        
        default:
            echo 'existiert keine switch regel';
        break;
    }
    echo '<br>';
}



?>
</body>

</html>