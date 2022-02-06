<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><h2>PHP File Handling Modes</h2></p>
    
    <?php

        echo "<ol>";
        echo "<li>";
        echo "Read only file Mode: "."<br>";

        $myfile = fopen("file.txt", "r") or die("Unable to open file!");
        
        echo fread($myfile,filesize("file.txt"));

        echo "</li>";
        

        echo "<br>";
        echo "<br>";

        echo "<li>";
        echo "Read Single File"."<br>";
        $myfile = fopen("file.txt", "r") or die("Unable to open file!");
        echo fgets($myfile);
        echo "</li>";

        echo "<br>";
        echo "<br>";

        echo "<li>";
        echo "Check End-of-Line"."<br>";
        $myfile = fopen("file.txt", "r") or die("Unable to open file!");
        while(!feof($myfile)) 
        {
            echo fgets($myfile) ."<br>";
        }
        echo "</li>";

        echo "<br>";

        echo "</ol>";
        
?>
    
</body>
</html>