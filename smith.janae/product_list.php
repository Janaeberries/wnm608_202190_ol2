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

    <script src="../smith.janae/resources/js/product_list.js"></script>
    <script src="../smith.janae/resources/lib/js/functions.js"></script>
    <script src="../smith.janae/resources/js/templates.js"></script>


     <div class="container">
        <div class="form-control">
            <form id="product-search" class="hotdog light">
                <input type="search" placeholder="Products">
            </form>
        </div>

        <div class="form-control">
            <div class="card soft">
            <div class="display flex">
                <div class="flex-stretch display-flex">
            <div class="flex-none">
                <button data-filter type="button" class="form-button">All</button>
            </div>
            <div class="flex-none">
                <button data-filter="category" data-value="cleansers" type="button" class="form-button">cleansers</button>
            </div>
            <div class="flex-none">
                <button data-filter="category" data-value="toners" type="button" class="form-button">toners</button>
            </div>
            <div class="flex-none">
                <button data-filter="category" data-value="serums" type="button" class="form-button">serums</button>
            </div>
            <div class="flex-none">
                <button data-filter="category" data-value="moisturizers" type="button" class="form-button">moisturizers</button>
            </div>
        </div>
    </div>
</div>

        <div class="flex-none">
            <div class="form-select">
            <select class="js-sort">
                <option value="1">Lowest to Highest</option>
                <option value="2">Highest to Lowest</option>
                <option value="3">Newest</option>
                <option value="4">Oldest</option>
            </select>
        </div>
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