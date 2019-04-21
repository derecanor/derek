

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

        $sql_lecturer= "INSERT INTO student(fname,lname,uname,department,qualification,contact,address,email,password) 
  VALUES ('$first','$last','$uname' ,'$dept','$qual','$contact','$add','$email','$pass')";
    mysqli_query($conn, $sql_lecturer) or die("Error bad query!");

    $_SESSION['admin'] = $username;
    header('location: ../lecturerHomepage.php');
}


