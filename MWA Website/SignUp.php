<html>

<head>
    <title>Sign Up</title>
</head>

<body>

    <h1>

    <?php

        $name = $_GET["name"];
        $SAP = $_GET["SAP"];
        $school = $_GET["school"];
        $age = $_GET["age"];
        $email = $_GET["email"];

        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "mwa project";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if($conn->connect_error)
        {
            die("<b>Connection error : </b".$conn->connect_error);
        }
        
        $add_record = "INSERT INTO students VALUES ('$SAP', '$name', '$school', '$age', '$email')";

        $sql = "SELECT * FROM students WHERE SAP = '$SAP'";
        $result = $conn->query($sql);

        if($result->num_rows == 0)
        {
            if($conn->query($add_record) === TRUE)
            {
                echo "You are registered succesfully";
            }
            else
            {
                echo "Error : ".$add_record."<br>".$conn->error;
            }
        }
        else
        {
            echo "<script type='text/javascript'>alert('This SAP already exists in mailing list.');</script>";
        }

        $conn->close();  

    ?>

    </h1>

</body>

</html>