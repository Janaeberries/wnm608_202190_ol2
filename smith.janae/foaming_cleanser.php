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

		<h2>Foaming Cleanser</h2>
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
        <form class="card soft" method="post" action="product_add_to_cart.php">
        	<figure class="figure">
        		<img src="resources/img/cleanser_bottle_2.jpg" alt="">


        	</figure>
        </div>
    </div>
</div>
</div>


<div class="container">

 <div class="card-section">
        	<label for="product-amount" class="form-label">Amount</label>
        		<select id="product-amount" name="product-amount">
        			<option>1</option>
        			<option>2</option>
        			<option>3</option>
        			<option>4</option>
        			<option>5</option>
        			<option>6</option>
        			<option>7</option>
        			<option>8</option>
        			<option>9</option>
        			<option>10</option>
        		</select>
        	</div>
        </div>

        <div class="card-section">
        	<input type="submit" class="form-button" value="Add To Cart">
        </div>

<div class="nav">

            <nav class="nav nav-pills">
                <ul>
                    <li><a href="product_added_to_cart.php">Add to Cart</a></li>
                </ul>
            </nav>

        </div>
</div>

<div class="card soft">

	<p>The foaming cleanser is great for those mornings when you feel like you're having a hard time waking up. The foams draws out dirt to reveal a fresh face.</p>

</div>


</body>
</html>