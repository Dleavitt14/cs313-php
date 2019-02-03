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
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
</head>
<body>
    <?php

    $product = $_SESSION['products'];

    for ($i=0; $i < count($product); $i++) {
        echo "<h2>".$product[$i]."<p>";

        if ($product[$i]=="blue-pen") {
            echo "<h2>$100</h2>";
            echo "<form>".
            '<input type="text" name="remove" hidden value="blue-pen">'.
            '<input type="submit" value="Remove Product">'.
            "</form>";
        }
        elseif ($product[$i]=="multi-colored-pens") {
            echo "<h2>$400</h2>";
        }
        else {
            echo "It didn't work";
        }

    }

    ?>
</body>
</html>