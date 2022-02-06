<?php
   if($_GET["fname"] && $_GET["lname"]) 
   {
     echo "Welcome ".$_GET['fname'].$_GET['lname']."<br/>";
     echo "Your Password is : ".$_GET['password']."<br/>";
     echo "Yout Date of Birth is: ".$_GET['date']."<br/>";
     exit();
    }
?>