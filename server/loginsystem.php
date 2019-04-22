<?php

session_start();


if (isset($_POST['login'])) {


require_once('connection.php');

    if($conn===false){
        die("connection failed");
    }

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $category=$_POST['category'];

    if ($category='Lecturer'){
    $sql="SELECT email,password FROM lecturer WHERE email='$email' AND password='$password'";
    $sql_lecturer=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($sql_lecturer);
    $count=mysqli_num_rows($sql_lecturer);
    if ($count==1){
        $_SESSION['email']=$email;

        header('location:../lecturerhome.php');
    }else{
        header('location:../index.php');

    }

    }else
        //($category='Student')//
    {
        $sql="SELECT email,password FROM student WHERE email='$email' AND password='$password'";
        $sql_student=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($sql_student);
        $count=mysqli_num_rows($sql_student);
        if ($count==1){
            $_SESSION['email']=$email;

            header('location:../studenthome.php');
        }else{
            header('location:../index.php');

        }

    }
    //else{
      //  echo 'Bad user category';
    //    header('location:../index.php');
    //
    //}
}













