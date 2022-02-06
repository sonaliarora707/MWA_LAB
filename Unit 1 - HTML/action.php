<?php
   if($_GET["name"]||$_GET["password"]||$_GET["sap"]||$_GET["mobile"]) 
   {
     echo "Welcome ".$_GET['name']." <br/>";
     echo "Your Password is : ".$_GET['password']."<br/>";
     echo "Your SAP is : ".$_GET['sap']."<br/>";
     echo "Your Mobile No is : ".$_GET['mobile']."<br/>";
     exit();
    }
?>