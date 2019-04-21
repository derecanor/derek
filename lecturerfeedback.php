<?php

session_start();

include '../feedback/lecturerfeedback.php';


$id = htmlspecialchars($_GET['id']);

if($_SESSION['user'] == null || strtolower($_SESSION['user']['function']) != 'lecturer'){
    $_SESSION['error'] = 'You cannot make changes!';
    header('Location: ../login.php');
}
else
{

    $lecturerfeedback = new lecturerfeedback();

    $feedback= $lecturerfeedback->grabfeedbackByid(trim($id));

    if($feedback == null)
    {
        $_SESSION['error'] = 'feedback not found!';

    }
    else
    {
        $_SESSION['feedback'] = $lecturerfeedback;
    }

    header('Location: ../lecturer_coursework_feedback.php');
    return;

}