<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    require('login.php');
    $sql = "DELETE FROM users WHERE username='" . $_SESSION["username"] . "'";
    if (mysqli_query($con, $sql)) {
        echo "Record Deleted Successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
    mysqli_close($con);
    ?>
</body>
</html>