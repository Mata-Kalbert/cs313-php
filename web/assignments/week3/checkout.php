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
<h1>Check out</h1>
<form method="post" action="confirm.php">
<p> Enter your shippind address:</p>
<label for="name">Name</label><input type="text" name="name"><br>
<label for="street">Street</label><input type="text" name="street"><br>
<label for="city">City</label><input type="text" name="city"><br>
<label for="state">State</label><input type="text" name="state"><br>
<label for="zipcpde">Zip Code</label><input type="number" name="zipcode"><br>
<input type="submit" value="Checkout" class="buttom">
</body>




