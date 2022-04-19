<html>

<body>

    <h1>

    <?php

        $name = $_GET["name"];
        $SAP = $_GET["SAP"];
        $school = $_GET["school"];
        $age = $_GET["age"];
        $email = $_GET["email"];

        $conn = new mysqli("localhost", "username", "password", "MWA project");

        if($conn->connect_error)
        {
            die("<b>Connection error : </b".$conn->connect_error);
        }
        
        $add_record = "INSERT INTO students VALUES ('$SAP', '$name', '$school', '$age', '$email')";

        $find = "SELECT * FROM students WHERE SAP = '$SAP'";
        $result = $conn->query($find);

        if($result->num_rows == 0)
        {
            $operation = $conn->query($add_record);
            echo "Record ADDED successfully!";
        }
        else
        {
            echo "<h1>This SAP already exists in mailing list.</h1>";
        }

        $conn->close();  

    ?>

    </h1>

</body>

</html>