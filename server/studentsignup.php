<?php

session_start();





if (isset($_POST['studReg'])) {

    include_once ('connection.php');

    if ($conn === false) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
    $module = mysqli_real_escape_string($conn, $_POST['module']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // insert  into student table
    $sql_student = "insert into student(first,last,module,email,password) values ('$first', '$last', '$module', '$email', '$password')";
    mysqli_query($conn, $sql_student);
    $_SESSION['email'] = $email;
    header('location : studenthomepage.php');


}
?>