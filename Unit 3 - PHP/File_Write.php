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
    
    <p><h3>Write only 'w'</h3></p> 
        <?php 
             $myfile = fopen('file.txt', 'w');
             fwrite($myfile, 'I am PHP');
             $myfile = fopen('file.txt', 'r');
             echo fread($myfile,filesize("file.txt"));
             fclose($myfile);
        ?>
</body>
</html>