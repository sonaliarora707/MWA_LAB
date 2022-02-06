<?php
     $servername = "localhost";
     $username = "root";
     $password = ""; // blank
     $dbname = "test";
     
     $conn = new mysqli($servername, $username, $password, $dbname);
 
     if($conn -> connect_error)
     {
         die("connection failed: ".$conn->connect_error);
 
     }
     // echo "Connected Successfully";
     $sql = "SELECT * from myguests;";
     $result = $conn->query($sql);
     
     if($result->num_rows>0)
     {
         while($row = $result -> fetch_assoc())
         {
             echo "ID: ".$row["id"]." | Name: ".$row["firstname"]." ".$row["lastname"]."<br>";
         }
     }
     else
     {
        echo "0 Records!";
     }
 
     $conn->close(); 

?>