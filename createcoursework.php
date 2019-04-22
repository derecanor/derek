<?php
session_start();


$coursework_id = htmlspecialchars($_POST['coursework_id']);
$module_title = htmlspecialchars($_POST['module_title']);
$module_code = htmlspecialchars($_POST['module_code']);
$coursework = htmlspecialchars($_POST['coursework']);

$target = "transfers/";
$target_document = $target. md5(uniqid(rand(), true)) . basename($_DOCUMENT["exam"]["title"]);
$transferPass= 1;
/*file type authenticity*/
$FileType = strtolower(pathinfo($target_document, PATHINFO_EXTENSION));



if (!move_transterred_document($_DOCUMENT["document"]["tmp_document_name"], $target_document))
{
    $_SESSION['error'] = 'Unsuccessful transfer';
}
else
{
    $coursework = new coursework();


    $result = $coursework->createcoursework($coursework_id, $module_title, $module_code, $coursework, $_SESSION['user']['id']);

    if ($result)
    {
        $_SESSION['success'] = 'Successful coursework creation!';
    }
    else
    {
        $_SESSION['error'] = 'Coursework creation failed!';
    }

}

