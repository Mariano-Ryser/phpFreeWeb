<?php
    // Preset path to include folder
    set_include_path($_SERVER['DOCUMENT_ROOT'] . '/php');

    // Page includes
    include 'auth.php';
    include 'quiz-ckue-data.php';

    // Start the session
    session_start();

    // Get quiz data
    $quizData = qchris_data();
    
    
    // Get the ID of the question from the post object
    // Get the question data for the given ID
    if (isset($_POST['questionID'])) {
        $questionID = $_POST['questionID'];
        $pageData = $quizData['questions'][$questionID];
    }

    if (!isset($pageData)) {
        echo 'Question data for questionID="' . $questionID . '" not available.';
        exit;
    }

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
                echo '<a href="/indexChris.php">' . $pageData['text'] . '</a>'; 
            ?>
            </span>
            <form action="<?php echo $pageData['nextAction']; ?>" method="post">

                <input type="radio" id="answer0" name="radio" 
                    value="<?php echo $pageData['answers'][0][1]; ?>">
                <label for="answer0"><?php echo $pageData['answers'][0][0]; ?></label><br>

                <input type="radio" id="answer1" name="radio" 
                    value="<?php echo $pageData['answers'][1][1]; ?>">
                <label for="answer1"><?php echo $pageData['answers'][1][0]; ?></label><br>

                <input type="radio" id="answer2" name="radio" 
                    value="<?php echo $pageData['answers'][2][1]; ?>">
                <label for="answer2"><?php echo $pageData['answers'][2][0]; ?></label><br><br>

                <input type="hidden" name="questionID" 
                       value="<?php echo $pageData['questionID']; ?>">
                       
                <input class=button type="submit" value="NEXT">

            </form>
        </div>
    
</body>

</html>