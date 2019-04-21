<?php

include '../group/creategroup.php';

session_start();

$firstname = htmlspecialchars($_POST['firstname']);
$lastname = htmlspecialchars($_POST['lastname']);
$email = htmlspecialchars($_POST['email']);
$indexno= htmlspecialchars($_POST['indexno']);


if($_SESSION['user'] == null || strtolower($_SESSION['user']['function']) != 'lecturer'){
    $_SESSION['error'] = 'You cannot make this change!';
    header('Location: ../index.php');
}
else

{

    /*Group creation*/


    $group = new group();

    $result = (new group())->creategroup($firstname, $lastname,$email,$indexno,$_SESSION['task']['id']);

    if($result)
    {
        $_SESSION['success'] = 'Successful group creation!';
        header('Location: task/lecturer_create_group.php');
        return;
    }
    else
    {
        $_SESSION['error'] = 'Unsuccessful group creation!';
        header('Location: task/lecturer_create_group.php');
        return;
    }

}





