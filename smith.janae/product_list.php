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
					<li><a href="product_cart.php">Cart</a></li>
				</ul>
			</nav>
		</div>
	</header>

    <?php 

    include_once "resources/lib/php/functions.php";
    include_once "resources/parts/templates.php";

 ?>

    <script src="../js/product_list.js"></script>
    <script src="../lib/js/functions.js"></script>
    <script src="../js/templates.js"></script>


     <div class="container">
        <div class="form-control">
            <form id="product-search" class="hotdog light">
                <input type="search" placeholder="Products">
            </form>
        </div>
    </div>

	<div class="view-window" style="background-image: url(resources/img/skincare_woman.png);"></div>



    <div class="container" id="productlist">
        <h2>Skincare</h2>

            <div class='productlist grid gap'></div>

            <?php

            $result = makeQuery(
                makeConn(),
                "
                SELECT *
                FROM `products`
                ORDER BY `date_create` ASC
                LIMIT 12
                "
            );

            echo "<div class='grid gap'>",array_reduce($result,'productListTemplate'), "</div>";





            ?>
    


            




    </div>

</div>

	


	
</body>
</html>