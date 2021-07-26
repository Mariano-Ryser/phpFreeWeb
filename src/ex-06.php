
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
    <br><br>
    
<br><br>

<?php 
     $name = "Ryser";
     $vorname = "Mariano";
     $alter = "30";
     $mail = 'rysermariano@gmail.com';

?>

    <form action="accion.php" method="post">
    
 <p>Name: <input type="text" name="nombre" /></p><br>
 
 <p>Vorname: <input type="text" name="nombre" /></p><br>

 <p>Alter:   <input type="text" name="edad" /></p><br>

 <p>Mail: <input type="text" name="nombre" /></p><br>

 <br>
 <p><input class ="submit" type="submit" /></p>
</form>
<br><br>

<?php 
echo $name . '<br>';
echo $vorname. '<br>';
echo $alter. '<br>';
echo $mail; 

 ?>

<?php include("Footer.php") ?>

    </body>
</html>




