<?php

include_once "resources/lib/php/functions.php";

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

// print_p($product);

?>

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
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<img src="<?= $product->thumbnail ?>">
				</div>

				<div class="images-thumbs">
            <?= $image_elements ?>
        </div>

			</div>

			 <div class="col-xs-12 col-md-5">

        <form class="card soft" method="post" action="cart_actions.php?action=add-to-cart">

                <input type="hidden" name="product-id" value="<?= $product->id ?>">

            <div class="card-section">
            <h2 class="product-name"><?= $product->name ?></h2>
            <div class="product-price">&dollar;<?= $product->price ?></div>
        </div>

        <div class="card-section">
        <input type="submit" class="form-button" value="Add to Cart">
        
    </div>

		
	</div>


<div class="container">
	<div class="card soft">
     <h3>Product Description</h3>
    <p><?= $product->description ?></p>
   
    <div class="form-control">
        <label for="product-amount" class="form-label">Amount</label>
        <div class="form-select">
            <select id="product-amount" name="product-amount">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
            </select>
        </div>
    </div>

    <div class="form-control">
        <label for="product-material" class="form-label">Material</label>
            <div class="form-select">
                <select id="product-mateial" name="product-material">
                    <option>1.0oz</option>
                    <option>1.7oz</option>
                    <option>3.4oz</option>
                </select>
            </div>
    </div>


</div>



    </form>
</div>
</div>




</div>
	
</body>
</html>