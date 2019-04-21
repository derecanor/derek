<?php





if (isset($_POST['lecturerReg'])) {

    $username = "";
    $email    = "";
    $errors = array();
    include_once 'connection.php';

    if ($conn === false) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $first = mysqli_real_escape_string($conn, $_POST['fname']);
    $last = mysqli_real_escape_string($conn, $_POST['lname']);
    $add = mysqli_real_escape_string($conn, $_POST['address']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $qual = $_POST['qualification'];
    $dept = $_POST['dept'];
    // $sid = $_POST['stafid'];


    //to ensure accurate fill out of forms//

    /*
    if (empty($username)) {
        array_push($errors, "username is required");
    }
    if (empty($email)) {
        array_push($errors, "email is required");
    }
    */
    /* if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         array_push($errors, "Phone_no is required");
     }*/
    /*
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    */
    /* if ($pass1 != $pass2) {
         array_push($errors, "Passwords do not match");
   /*  }/*
    *//* if (empty($first)) {
        array_push($errors, "First name is required");
    }
    if (empty($last)) {
        array_push($errors, "Last name is required");
    }
    if (empty($add)) {
        array_push($errors, "address is required");
    }*/
    /* if ($get != 0) {
         array_push($error, "Username or email taken");
     } else {
         $password = password_hash($pass, PASSWORD_DEFAULT);// HASH the password
 */
    /*// insert into login
    $sql = "INSERT INTO login (username,email,password,isAdmin) VALUES ('$uname','$email','$pswd',1)";
    mysqli_query($db, $sql);*/

    // insert into admin table
    $sql_ad = "INSERT INTO admin (fname,lname,uname,department,qualification,contact,address,email,password) 
        VALUES ('$first','$last','$uname' ,'$dept','$qual','$contact','$add','$email','$pass')";
    mysqli_query($conn, $sql_ad);

    $_SESSION['admin'] = $username;
    header('location: lecturerHomepage.php');
}



