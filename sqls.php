<?php

include 'sql.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey</title>

        <!-- This is Eric Meyers CSS Reset -->
        <link rel="stylesheet" href="cssreset.css">

        <!-- This is my own style sheet -->
        <link rel="stylesheet" href="style.css">
    
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet"> 
    
        <script src="https://kit.fontawesome.com/98ac3dc891.js" crossorigin="anonymous"></script>
</head>
<body class="bod4">
    <header>
        <nav class="edunav">
            <a href="index.html" class="My-Button">Home</a>
            <a href="workexperince.html" class="My-Button">Work Experince</a>
            <a href="skills.html" class="My-Button">Skills & Projects</a>
            <a href="sqls.html" class="My-Button">SQL Survey</a>
        </nav><br>
    </header>

    <h1 class="Wu">Portfolio Survey</h1>
    <br>
    <h3>Work in progress!</h3>
    <br>

    <h3>Thanks for viewing my portfolio, feel free to leave a comment and your name on how I could improve this site. Or anything on your mind!</h3>
    <br>
    <br>
    <br>

    <div id="col1-box">
    <form action="sql.php" method="post">
        <input id="txusername" type="text" placeholder="Enter Name"> <br />
        <br>
        <br>
        <p class="pc">Enter Comment</p>
        <textarea name="Comment" id="comment1" cols="30" rows="10"></textarea>
        <button id="btsubmit" type="submit" value="Submit"> <br /> <br />
    </form>
    </div>
</body>
</html>
