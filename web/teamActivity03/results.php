<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
        Name: <?php echo $_POST["name"]; ?>
        <br>
        Email: <a href="mailto:<?php echo $_POST["email"]; ?>"><?php echo $_POST["email"]; ?></a>
        <br>
        Major: <?php echo $_POST["major"]; ?>
        <br>
        Comments: 
        <p><?php echo $_POST["comments"]; ?></p>
        Continents Visited:
        <br>
        <?php
            if(empty($_POST["continent"])) {
                echo "none<br>";
            }
            else {
                foreach($_POST["continent"] as $continent) {
                    echo $continent . "<br>";
                }
            }
        ?>    
</body>
</html>