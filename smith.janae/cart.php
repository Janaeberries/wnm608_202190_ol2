<?php

include_once "resources/lib/php/functions.php";

$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (1,2,3,4)");

// print_p($product);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart</title>

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
        <div class="card soft">
        	<div class="grid gap"></div>
        <h2>Cart</h2>

            </div>
        </div>


</body>
</html>