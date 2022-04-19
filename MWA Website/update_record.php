<?php
    $conn = new mysqli("localhost", "username", "password", "MWA project");

    if($conn->connect_error)
    {
        die("Cannot connect".$conn->error);
    }

    $record = $_GET["SAP"];
    $sql = "SELECT * FROM students WHERE SAP = $record";
    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        $name = $_GET["Name"];
        $sql_update = "UPDATE students SET Name = '$name' WHERE SAP = $record";
        $result = $conn->query("$sql_update");
        echo "<h1>Record of SAP = $record UPDATED successfully";
    }
    else 
    {
        echo "<h1>Record does not exist!</h1>";
        exit();
    }

    $conn->close();
?>