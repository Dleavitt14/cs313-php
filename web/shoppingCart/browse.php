<?php
    session_start();

    if (!isset($_SESSION['products'])) {
        $_SESSION['products'] = array();
    } 
    
    if (isset($_POST['item'])) {
        array_push($_SESSION['products'], $_POST['item']);
    }
    

?>

!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Browse Items</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
</head>
<body>
    <header>
        <h1>The Pen Shop</h1>
        <p id="view-cart"><a href="cart.php">View Cart</a></p>
    </header>
    <main>
        <section>
            <div class="item">
                <img src="images/blue-pen.jpg" alt="blue pen">
                <h3>Blue Pen</h3>
                <h4>$100</h4>
                <form action="#" method="POST">
                    <input type="text" hidden name="item" value="blue-pen">
                    <input type="submit" value="ADD PRODUCT">
                </form>
            </div>
            <div class="item">
                <img src="images/multi-colored-pens.jpg" alt="multi colored pens">
                <h3>Multi Colored Pens</h3>
                <h4>$400</h4>
                <form action="#" method="POST">
                    <input type="text" hidden name="item" value="multi-colored-pens">
                    <input type="submit" value="ADD PRODUCT">
                </form>
            </div>
            <div class="item">
                <img src="images/orange-highlighter.jpg" alt="orange highlighter">
                <h3>Orange Highlighter</h3>
                <h4>$150</h4>
                <button type="button" name="orange-high-lighter">Add Product</button>
            </div>
            <div class="item">
                <img src="images/red-pen.jpg" alt="red pen">
                <h3>Red Pen</h3>
                <h4>$100</h4>
                <button type="button" name="red-pen">Add Product</button>
            </div>
            <div class="item">
                <img src="images/sharpies.jpg" alt="sharpies">
                <h3>Sharpies</h3>
                <h4>$500</h4>
                <button type="button" name="sharpies">Add Product</button>
            </div>
            <div class="item">
                <img src="images/zebra-pen.jpg" alt="zebra pen">
                <h3>Zebra Pen</h3>
                <h4>$125</h4>
                <button type="button" name="sharpies">Add Product</button>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy Derek Leavitt 2018</p>
    </footer>
</body>
</html>