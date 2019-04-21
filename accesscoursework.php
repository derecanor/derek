<?php

session_start();

include '../task/accesscoursework.php';

$id = htmlspecialchars($_GET['id']);

/*user should be lecturer*/

if($_SESSION['user'] == null || strtolower($_SESSION['user']['function']) != 'lecturer'){
    $_SESSION['error'] = 'You cannot make this change!';
    header('Location: ../index.php');

}
else
{

    $studentactivity = new studentactivity();

    $activity = $studentactivity->call_coursework_id(trim($id));

    if($activity== null)
    {
        $_SESSION['error'] = 'Access denied!';

    }
    else
    {
        $_SESSION['activity'] = 'Coursework access!';
    }

    header('Location: ../student_access_coursework');
    return;

}




