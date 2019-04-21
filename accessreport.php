<?php

session_start();

include_once '../upload/uploadreview.php';
include_once '../grademembers.php';

$review_id = $_GET['id'];

$uploadreview = new uploadreview();
$grademembers=new grademembers();

if($_SESSION['user'] == null || strtolower($_SESSION['user']['function']) != 'student'){
    $_SESSION['error'] = 'You cannot make change!';
    header('Location: ../login.php');
}
else
{



    $_SESSION['reviews'] = $reviews;
    $_SESSION['uploadreview'] = $uploadreview->getuploadreviewByid(trim($review_id));


    $student = $peer_review->grabStudentPeerReviews($_SESSION['uploadreview']['review_id']);


    header('Location: ../lecturer_access_peer_reviews.php');

}