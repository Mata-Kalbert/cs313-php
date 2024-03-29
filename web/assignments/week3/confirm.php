<?php
session_start();

$name = htmlspecialchars($_REQUEST["name"]);
$street = htmlspecialchars($_REQUEST["street"]);
$city = htmlspecialchars($_REQUEST["city"]);
$state = htmlspecialchars($_REQUEST["state"]);
$zipcode = htmlspecialchars($_REQUEST["zipcode"]);
    
      if ( isset($_GET["back"])) {
          $i = $_GET["back"];
          unset($_SESSION["cart"]);
          header("Location: https://intense-savannah-57089.herokuapp.com/assignments/week3/scart.php");

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
    <h2>Order Confirmed</h2>
    <h3>Items:</h3>
  <div class="display">
    <?php
foreach ( $_SESSION["cart"] as $i ) {
?>
	<div class="product">
        <p><?php echo( $product[$_SESSION["cart"][$i]] ); ?></p>
        <p><?php echo( $_SESSION["product"][$i] ); ?></p>
        <img src=<?php echo( $_SESSION["image"][$i] ); ?> alt="productimage">
        <p><?php echo( $_SESSION["price"][$i] ); ?></p>
    </div>
<?php
}
?>
</div>
<div class="shipping">
<h2>Will be mailed to:</h2>
<p>Name: <?php echo $name; ?></P>
<p>Street: <?php echo $street; ?></P>
<p>City: <?php echo $city; ?></P>
<p>State: <?php echo $state; ?></P>
<p>Zip Code: <?php echo $zipcode; ?></P>
<a href="?back=<?php echo($i); ?>">Continue shopping</a>
</div>

</body>
