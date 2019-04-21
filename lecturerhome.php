<?php
session_start();
if (!isset($_SESSION['email'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Lecturer HomePage</title>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <link rel="stylesheet" href="CSS/lecturerhomepage.css">

        </head>
<body>
<header>

    <div class="row">
        <div class="logo">
            <img src="image/logos.jpg" height="230" width="219">
        </div>
        <ul class="main-nav">
            <li class="active"><a href= "">HOME</a> </li>
            <li><a href= "">ABOUT</a> </li>
            <li><a href= "">LIBRARY</a> </li>
            <li><a href= "">STUDENT GROUPS</a> </li>
            <li><a href= "">STUDENT FEEDBACK</a> </li>
            <li><a href= "">COURSEWORK </a> </li>
            <li><a href= "">RESEARCH LINKS</a> </li>
        </ul>
    </div>

    <div class="admin">
        <h1>Lecturer Platform </h1>

        <div class="button">
            <a href="" class="btn btn-one">Video Links</a>
            <a href="" class="btn btn-one">Podcasts</a>
            <a href="" class="btn btn-two">Explore More</a>

        </div>
    </div>
</header>
</body>
</html></title>
</head>
<body>

</body>
</html>