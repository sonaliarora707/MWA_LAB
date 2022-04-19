<?php
    $conn = new mysqli("localhost", "username", "password", "MWA project");

    if($conn->connect_error)
    {
        die("Cannot connect".$conn->error);
    }

    $sql = "DELETE FROM students";
    $result = $conn->query($sql);

    echo "<h1>ALL RECORDS DELETED SUCCESSFULLY!";
    
    $conn->close();
?>