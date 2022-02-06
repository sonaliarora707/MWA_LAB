<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $fh = fopen("my_settings.txt", 'w') or die("Failed to create file"); 
        $text = <<<_END 
        localhost;root;pwd1234;my_database 
        _END; 
        fwrite($fh, $text) or die("Could not write to file"); 
        fclose($fh); 
        echo "File 'my_settings.txt' written successfully"; 
    
    ?>

</body>
</html>