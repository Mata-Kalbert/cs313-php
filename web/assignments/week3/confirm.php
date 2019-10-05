<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="shoppingcart.css">
    <title>Shopping Cart Activity</title>
</head>
<body>
    <h1>Order Confirmed</h1>
    <p>Thanks for shopping with us</p>
    <h2>Items:</h2>
    <?php
foreach ( $_SESSION["cart"] as $i ) {
?>
	<div>
        <p><?php echo( $product[$_SESSION["cart"][$i]] ); ?></p>
        <p><?php echo( $_SESSION["product"][$i] ); ?></p>
        <img src=<?php echo( $_SESSION["image"][$i] ); ?> alt="productimage">
        <p><?php echo( $_SESSION["price"][$i] ); ?></p>
    </div>
<?php
}
?>
</body>
