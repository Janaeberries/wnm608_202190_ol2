<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Anaberry Skincare</title>

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
			<h2>Product Item</h2>

			<p>This is the cleanser <?= $_GET['id'] ?></p>

		</div>
	</div>
	
</body>
</html>