<?php

include_once "resources/lib/php/functions.php";
include_once "resources/parts/templates.php";

//$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (4,7,10)");


$cart_items = getCartItems();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checkout Page</title>

	<link rel="stylesheet" href="resources/lib/css/styleguide.css">
    <link rel="stylesheet" href="resources/css/storetheme.css">
    <link rel="stylesheet" href="resources/lib/css/gridsystem.css">

</head>
<body>

<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Anaberry Skincare</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="product_list.php">Store</a></li>
					<li><a href="cart.php">Cart</a></li>
				</ul>
			</nav>
		</div>
	</header>


    <div class="container">
    
        <h2>In Your Cart</h2>
        <div class="grid gap">
            <div class="col-xs-12 col-md-7">
                <div class="card soft">
                    
                        <?= array_reduce($cart_items, 'cartListTemplate') ?>
                    
                </div>
            </div>
            <div class="col-xs-12 col-md-5">
                <div class="card soft">
                    <?= cartTotals() ?>
                
            </div>
        
        </div>

    </div>

</div>




</body>
</html>