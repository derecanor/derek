<?php

$username = "";
$email    = "";
$errors = array();



if (isset($_POST['studReg'])) {

    include_once 'connection.php';
    if ($conn === false) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $indexno = mysqli_real_escape_string($conn, $_POST['indexno']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $grade = mysqli_real_escape_string($conn, $_POST['grade']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    /*to ensure accurate completion of spaces on form

    /*if (empty($username)) {
        array_push($errors, "Username required!");
    }
    if (empty($email)) {
        array_push($errors, "Email required!");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Incorrect email address!");
    }
    /*
    if (empty($password_1)) {
        array_push($errors, "Password required!");
    }

    if ($pass1 != $pass2) {
        array_push($errors, "Passwords do not match");
    }
/*
   / else {
        $check_user = "SELECT * FROM login WHERE username= '$username' OR email='$email' ";
        $result = mysqli_query($conn, $check_user);
        $get = mysqli_num_rows($result);
        if ($get != 0) {
            array_push($errors, "Username or email taken");
        } else {
           // $password = password_hash($pass2, PASSWORD_DEFAULT);// HASH the password

            // insert into login table
            $sql = "INSERT INTO login (username,email,password,isAdmin) VALUES ('$username','$email','$pswd',0)";
            $res = mysqli_query($conn, $sql);
*/
    // insert  into student table
    $sql_student = "INSERT INTO student(firstname,lastname,username,course,grade,email,contact,indexno,address,password) VALUES ('$first','$last','$username','$course','$grade','$email','$contact','$indexno','$address','$password')";
    mysqli_query($conn, $sql_student);
    $_SESSION['student'] = $username;
    header('location : studenthomepage.php');


}
