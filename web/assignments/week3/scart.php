<?php
session_start();

$product = array("Bat", "Catchergear", "Catcherset");
$image = array("imgcart/bat.png", "imgcart/catchergear.jpg","imgcart/catcherset.jpg");
$price = array("$10", "$45", "$8");

if ( isset($_GET["add"]) ) {
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
    <link type="text/css" rel="stylesheet" href="scart.css">
    <title>Shopping Cart Activity</title>
</head>
<body>
    
    <header>
    <div>
    <a href="cart.php"><img src="imgcart/shopcart.png" alt="cart"></a>
    <h1>Baseball Store</h1>
    </div>
    </header>
        <div class="display">
        <?php
        for ($i=0; $i< count($product); $i++) {
        ?>
         <div class="product">
        <h2><?php echo($product[$i]); ?></h2>
        <img src=<?php echo($image[$i]); ?> alt="productimage">
		<p><?php echo($price[$i]); ?></p>
		<a href="?add=<?php echo($i); ?>">Add to cart</a>
        </div>
    

<?php
}
?>
</div>
</body>