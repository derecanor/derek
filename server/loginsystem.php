<?php
session_start();

include_once 'connection.php';


ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    if (empty($username) || empty($password)) {
        header('location: ../homepage.php?login=wrong');
        exit();
    } else {


        $sql = "SELECT * FROM login WHERE username='$username' OR email= '$username'";
        $result = mysqli_query($conn, $sql);
        $check = mysqli_num_rows($result);


        if ($check != 1) {
            header('location: ../homepage.php?login=No Access');
            exit();
        } else {
            $id = "SELECT isAdmin FROM login WHERE username='$username' OR email= '$username' ";
            $result = mysqli_query($conn, $id);
            $check1 = mysqli_num_rows($result);
            $rows = mysqli_fetch_assoc($result);

            if ($rows ['islecturer'] == 1) {
                $row = mysqli_fetch_assoc($result);
                $password1 = password_verify($password, $row['Password']);


                if ($password1 = false) {
                    header('location: ../homepage.php?password_wrong');
                } else if ($password1 = true) {
                    $_SESSION['lecturer'] = $row['username'];
                    header('location : ../lecturerhomepage.php');
                    $_SESSION['Awesome'] = "Login successful";
                    exit();
                }

            } else {
                if ($rows ['isstudent'] == 2) {
                    ($row = mysqli_fetch_assoc($result));
                    $password2 = password_verify($password, $row['password']);
                    if ($password2 == false) {
                        header('location:  ../homepage.php?password_wrong');
                        exit();
                    } else if ($password2 == true) {
                        $_SESSION['student'] = $row['username'];
                        header('location : ../studenthomepage.php');
                        $_SESSION['Awesome'] = "Login successful";
                        exit();
                    } else {
                        header('location: ../homepage.php?denied_access');
                        exit();
                    }
                } else {
                    header('location:  ../homepage.php?login=error');
                    exit();
                }
            }
        }
    }
}
