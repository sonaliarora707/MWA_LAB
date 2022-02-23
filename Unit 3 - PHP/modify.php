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
    $sql = "DELETE TABLE myguests";

    if($conn -> query($sql) === TRUE)
    {
        echo "Table MyGuests deleted successfully!!";
    }

    else
    {
        echo "Error deleting table: ".$conn->error;
    }


?>