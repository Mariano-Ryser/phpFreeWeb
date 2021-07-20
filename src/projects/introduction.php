<?php
    // Preset path to include folder
    set_include_path($_SERVER['DOCUMENT_ROOT'] . '/php');

    // Page includes
    include 'auth.php';
    include 'quiz-ckue-data.php';

    // start session and initialize achieved number of points
    session_start();

    // Get quiz data
    $quizData = qchris_data();
    $pageData = $quizData['introduction'];

    // Initialize achieved number of points
    $_SESSION['achievedPoints'] = 0;

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/myQuizz/css/main.css">
</head>

<body>
 
        <div class="caption">
            <span class="border">
            <?php
                echo '<a href="/indexChris.php">' . $pageData['title'] . '</a>'; 
            ?></span>
            <form action="<?php echo $pageData['nextAction']; ?>" method="post">
                <input type="hidden" name="questionID" 
                       value="<?php echo $pageData['questionID']; ?>">
                <input class=button type="submit" value="START">
            </form>

        <br><br>

        <span class="border"><br>
            <?php 
            echo  "<br>";
            echo  "<br>";
            echo '<a href="/index.php">ANITA PROYECT</a>'; 
            ?>

        </span>
        </div>
    
</body>

</html>