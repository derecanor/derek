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
    <form method="post" action="server/loginsystem.php" id = "Loginform">
        <div class = "header1">
            <div class = grid-100>
                <div class = "logo">
                    <img src = "#">
                </div>

                <div class = "login" >
                    <table >
                        <tr >
                            <td>Select Category</td>
                            <td><select name="category">
                                    <option value="Lecturer">Lecturer</option>
                                    <option value="Student">Student</option>
                                </select></td>
                            <td> Email</td>
                            <td><input  class="login-txt" type="email" name="email" placeholder="Enter Email" ></td>
                            <td>Password</td>
                            <td><input class="login-txt" type="password" name="password" placeholder="Enter Password"></td>
                            <td>&nbsp</td>
                            <td><input type="Submit" name="login" value="login" class="btn"></td>

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

<div class="grid-container">
    <div class = grid-50>
        <div id = "LecturerForm">
            <form method="post" action="server/lecturersignup.php">
                <h2>Create Lecturer Account</h2>
                <div class="input">
                    <label>FirstName</label>
                    <input type="text" name="fname" placeholder="fname">
                </div>
                <div class="input">
                    <label>LastName</label>
                    <input type="text" name="lname" placeholder="lname">
                </div>
                <div class="input">
                    <label>Username</label>
                    <input type="text" name="uname" placeholder="uname">
                    <div class="input">
                        <label>Department</label>
                        <input type="dept" name="dept" placeholder="Dept">
                    </div>
                    <div class="input">
                        <label>Qualification</label>
                        <input type="qualification" name="qualification" placeholder="qualification">
                    </div>
                    <div class="input">
                        <label>Contact</label>
                        <input type="contact" name="contact" placeholder="contact">
                    </div>
                    <div class="input">
                        <label>Address</label>
                        <input type="address" name="address" placeholder="address">
                    </div>
                    <div class="input">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <div class="input">
                        <button type="submit" name="lecturerReg" class="btn">Register as Lecturer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class = grid-50>
        <div id = "StudForm">
            <form method="post" action="server/studentsignup.php">
                <h2>Create Student Account</h2>
                <div class="input">
                    <label>FirstName</label>
                    <input type="text" name="first" placeholder="first">
                </div>
                <div class="input">
                    <label>LastName</label>
                    <input type="text" name="last" placeholder="last">
                </div>
                <div class="input">
                    <label>Module</label>
                    <input type="text" name="module" placeholder="module">
                </div>
                    <div class="input">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="email">
                    </div>
                    <div class="input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="password">
                    </div>
                    <div class="input">
                        <button type="Submit" name="studReg" class="btn">Register as Student</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>




