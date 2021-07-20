<?php

function qchris_data() {
    return array(
        'introduction' => qchris_introductionData(), 
        'questions' => qchris_questionData(),
        'report' => qchris_reportData()
    );
}

function qchris_introductionData() {
    return array(
        'title' => "My First Quiz",
        'description' => "Just do it ...",
        'imageURL' => "/myQuizz/images/ask-blackboard.jpg",
        'nextAction' => 'question.php',
        'questionID' => 'q0'
    );
}

function qchris_questionData() {
    return array(
        'q0' => qchris_q0(),
        'q1' => qchris_q1(),
        'q2' => qchris_q2(),
        'q3' => qchris_q3(),
        'q4' => qchris_q4(),
    );
}

function qchris_q0() {
    return array(
        'text' => "What kind of an animal is a Woodpecker?",
        'answers' => array(
            array("Reptile", 0),
            array("Mammal", 0),
            array("Bird", 1)
        ),
        'nextAction' => 'question.php',
        'questionID' => 'q1'
    );
}



function qchris_q1() {
    return array(
        'text' => "How many wings has a beetle?",
        'answers' => array(
            array(2, 0),
            array(4, 1),
            array(8, 0)
        ),
        'nextAction' => 'question.php',
        'questionID' => 'q2'
        
    );
}

function qchris_q2() {
    return array(
        'text' => "Wie viele Knochen hat ein erwachsener menschlicher Körper?",
        'answers' => array(
            array(206, 1),
            array(250, 0),
            array(560, 0)
        ),
        'nextAction' => 'question.php',
        'questionID' => 'q3'
        
    );
}

function qchris_q3() {
    return array(
        'text' => "Wie viele Menschen leben ungefähr in der Schweiz?",
        'answers' => array(
            array("8.5 millionen", 1),
            array("24.5 millionen", 0),
            array("13.5 millionen", 0)
        ),
        'nextAction' => 'question.php',
        'questionID' => 'q4'
        
    );
}


function qchris_q4() {
    return array(
        'text' => "What is your favorite color?",
        'answers' => array(
            array("Red", 1),
            array("Blue", 0),
            array("Yellow", 0)
        ),
        'nextAction' => 'report.php'
        
    );
}

function qchris_reportData() {
    return array(
        'title' => "Congratulations",
        
        'feedback_40' => "lousy",
        'feedback_60' => "Ganador",
        'feedback_80' => "super!!!",
    );
}

?>