<?php
    // Preset path to include folder
    set_include_path($_SERVER['DOCUMENT_ROOT'] . '/php');

    // Page includes
    include 'auth.php';
    include 'quiz-ckue-data.php';

    // Start the session and initialize the result array
    session_start();
    $_SESSION["quiz-ckue-results"] = array();

    // Get quiz data
    $quizData = qchris_data();
    $pageData = $quizData['report'];

    // Session object: Update number of achieved points
    // var_dump($_POST);
    // $_SESSION['achievedPoints'] = $_SESSION['achievedPoints'] + $_POST['radio'];
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

                $questionNum = count($quizData['questions']);
                echo $questionNum . '<br>';

                $percentage = $_SESSION['achievedPoints'] / $questionNum; 
                echo $percentage . '<br>';

                echo '<p>' . $pageData['feedback_60'] . '</p>';
                echo '<p>You have answered ' . $_SESSION['achievedPoints'] . ' question(s) correctly.</p>';
            ?></span>
        </div>
    
</body>

</html>