<?php
   if($_GET["name"] == "JohnDoe_@1" && $_GET["password"] == "JohnKen@1928") 
   {
     echo "Welcome ".$_GET['name']." <br/>";
     echo "Your Password is : ".$_GET['password']."<br/>";
     exit();
    }
else
    echo "Wrong Username or Passowrd........ Try Again"
?>