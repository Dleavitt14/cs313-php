<?php

session_start();

if (isset($_POST['remove'])) {
    $_SESSION['products'] = NULL;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
</head>
<body>
<header>
    <h1>The Pen Shop</h1>
</header>
<main>
    <?php
    if (isset($_SESSION['products'])) {
        $product = $_SESSION['products'];

        for ($i=0; $i < count($product); $i++) {
            echo "<h2>".$product[$i]."<p>";

            if ($product[$i]=="Blue Pen") {
                echo "<h2>$100</h2>";
                echo "<form action='#' method='POST'>".
                '<input type="text" name="remove" hidden value="blue-pen">'.
                '<input type="submit" value="Remove Product">'.
                "</form>";
            }
            elseif ($product[$i]=="Multi-Colored Pens") {
                echo "<h2>$400</h2>";
                echo "<form action='#' method='POST'>".
                '<input type="text" name="remove" hidden value="multicolor pen">'.
                '<input type="submit" value="Remove Product">'.
                "</form>";
            }
            else {
                echo "It didn't work";
            }

        }
    }
    else {
        echo "";
    }
    ?>
    </main>
    <footer>
        <p>&copy Derek Leavitt 2018</p>
    </footer>
</body>
</html>