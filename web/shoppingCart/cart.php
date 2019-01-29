<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <?php

    foreach ($_SESSION['products'] as $product) {
        echo "<h2>$product<p>";

        if ($product=="blue-pen") {
            echo "<h2>$100</h2>";
        }
        elseif ($product=="multi-colored-pens") {
            echo "<h2>$400</h2>";
        }
        else {
            echo "It didn't work";
        }

    }

    ?>
</body>
</html>