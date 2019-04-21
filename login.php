<?php include ('server/connection.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Peer Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<main class = "grid-container">
    <form method="post" action="/server/loginsys.php" id = "Loginform">
        <div class = "header1">
            <div class = grid-100>
                <div class = "logo">
                    <img src = "#">
                </div>

                <div class = "login" >
                    <table >
                        <tr >
                            <td> Email(Username)</td>
                            <td><input  class="login-txt" type="email" name="username" placeholder="Enter Email(Username)" ></td>
                            <td>Password</td>
                            <td><input class="login-txt" type="Password" name="Password" placeholder="Enter Password"></td>
                            <td>&nbsp</td>
                            <td><input type="Submit" name="Login" value="Login" class="btn"></td>
                            <td> <a href="#">Forgotten Password?</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </form>

    <div id = "title"><br>
        <h1><b>Peer Review</b></h1>
        <h2>Create an Account </h2>
    </div>
</main>

