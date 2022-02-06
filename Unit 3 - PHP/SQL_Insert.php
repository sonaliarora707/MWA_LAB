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
     $sql = "INSERT INTO myguests(firstname,lastname,email) VALUES('John','Doe','johndoe@example.com');";
     $sql .= "INSERT INTO myguests(firstname,lastname,email) VALUES('Mary','Moe','mary@example.com');";
     $sql .= "INSERT INTO myguests(firstname,lastname,email) VALUES('Julie','Dooley','mary@example.com');";

     if($conn -> multi_query($sql) === TRUE)
     {
         echo "New Records added successfully!!";
     }
 
     else
     {
         echo "Error: "."<br>".$conn->error;
     }
 
     $conn->close(); 
?>