<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
    $("a").hover(function(){
        $(this).css("background-color", "grey");
        }, 
        function(){
        $(this).css("background-color", "white");
    });
    });

    $(document).ready(function(){
    $("p").hover(function(){
        $(this).css("border", "2px solid black");
        }, 
        function(){
        $(this).css("border", "1px ");
    });
    });
    </script>
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are in user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
        <p><a href="delete.php">Delete Records</a></p>
    </div>
</body>
</html>
