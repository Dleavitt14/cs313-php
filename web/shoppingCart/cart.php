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
        echo "<form action='#' method='POST'>".
                '<input type="text" name="remove" hidden value="blue-pen">'.
                '<input type="submit" value="Remove All Product">'.
                "</form>";

        for ($i=0; $i < count($product); $i++) {
            echo '<h2 class="cart-page">'.$product[$i]."</h2>";

            if ($product[$i]=="Blue Pen") {
                echo "<h2 class='cart-page'>$100</h2>";
            }
            elseif ($product[$i]=="Multi-Colored Pens") {
                echo '<h2 class="cart-page">$400</h2>';
            }
            elseif ($product[$i]=="Orange Highlighter") {
                echo '<h2 class="cart-page">$150</h2>';
            }
            elseif ($product[$i]=="Red Pen") {
                echo '<h2 class="cart-page">$100</h2>';
            }
            elseif ($product[$i]=="Sharpies") {
                echo '<h2 class="cart-page">$500</h2>';
            }
            elseif ($product[$i]=="Zebra Pen") {
                echo '<h2 class="cart-page">$125</h2>';
            }
            else {
                echo "<h2 class='cart-page'>It didnt work</h2>";
            }

        }
    }
    else {
        echo '<h2 class="cart-page">There are no items in your cart</h2>';
    }
    ?>
    </main>
    <footer>
        <p>&copy Derek Leavitt 2018</p>
    </footer>
</body>
</html>