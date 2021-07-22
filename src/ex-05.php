
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

   

<?php 

$benutzer = "Mariano";
$bv = date("D-M-Y");

function greet ($name , $day)
{   
   
    return "Hello $name" . " Wie geths dir?" . "<br>" . "Heute ist $day";
    
    echo '<br>'; echo '<br>'; echo '<br>'; //esto no aparecera porque esta despues del RETURN
    echo 'hjjfgjfghfghfgh';  //esto no aparecera porque esta despues del RETURN
}

$text = greet($benutzer,$bv);

//  echo '<br>';echo '<br>';echo '<br>';

echo $text;

?>

<?php include("Footer.php") ?>

    </body>
</html>




