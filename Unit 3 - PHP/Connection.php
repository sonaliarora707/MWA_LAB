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
    $sql = "CREATE TABLE MYGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if($conn -> query($sql) === TRUE)
    {
        echo "Table MyGuests created successfully!!";
    }

    else
    {
        echo "Error creating table: ".$conn->error;
    }


?>
