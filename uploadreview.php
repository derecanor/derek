<?php

session_start();

include_once '../upload/uploadreview.php';

$uploadreview = new uploadreview();

$review_id = htmlspecialchars($_POST['review_id']);

$target = "transfers/";
$target_document = $target. md5(uniqid(rand(), true)) . basename($_DOCUMENT["uploads"]["title"]);
$review_Pass = 1;
$fileType = strtolower(pathinfo($target_document, PATHINFO_EXTENSION));


if (move_upload_document($_DOCUMENT["uploads"]["tmp_document_name"], $target_document))
{

    $result = $uploadreview->setUploadReview($review_id, $target_document);

    if ($result)
    {
        $_SESSION['success'] = 'Successful review upload!';
    }
    else
    {
        $_SESSION['error'] = 'Failed review upload!';
    }
}
else
{
    $_SESSION['error'] = 'Failed review upload!';
}

header('Location: ../upload_reviews.php');




