<?php
session_start();

$product = array("bat", "catchergear", "glove");
$image = array("imgcart/bat.png", "imgcart/catcherset.jpg","imgcart/ProBattingGlove.jpg");
$price = array("$10", "$45", "$8");

    if ( isset($_GET["add"])) {
        $i = $_GET["add"];
        $_SESSION["product"][$i] = $product[$i];
        $_SESSION["image"][$i] = $image[$i];
        $_SESSION["price"][$i] = $price[$i];
        $_SESSION["cart"][$i] = $i;  
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="shoppingcart.css">
    <title>Shopping Cart Activity</title>
</head>
<body>
    <a href="cart.php"><img scr="imgcart/shopcart.png" alt="Cart"></a>
    <h1>Browse Products</h1>
    <?php
for ($i=0; $i< count($product); $i++) {
?>
	<div>
        <h2><?php echo($product[$i]); ?></h2>
        <img src=<?php echo($image[$i]); ?> alt="product">
		<p><?php echo($price[$i]); ?></p>
		<a href="?add=<?php echo($i); ?>">Add to cart</a>
</div>
<?php
}
?>
</body>
