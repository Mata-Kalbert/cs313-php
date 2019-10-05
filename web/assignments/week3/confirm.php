<?php
session_start();

$name = htmlspecialchars($_REQUEST["name"]);
$street = htmlspecialchars($_REQUEST["street"]);
$city = htmlspecialchars($_REQUEST["city"]);
$state = htmlspecialchars($_REQUEST["state"]);
$zipcode = htmlspecialchars($_REQUEST["zipcode"]);
    
      if ( isset($_GET["back"])) {
          $i = $_GET["back"];
          unset($_SESSION["cart"][$i]);
          header("Location: https://intense-savannah-57089.herokuapp.com/assignments/week3/scart.php");

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
<h2>Will be mail to:<h2>
<p>Name: <?php echo $name; ?></P>
<p>Street: <?php echo $street; ?></P>
<p>City: <?php echo $city; ?></P>
<p>State: <?php echo $state; ?></P>
<p>Zip Code: <?php echo $zipcode; ?></P>
<a href="?back=<?php echo($i); ?>">Continue shopping</a>

</body>
