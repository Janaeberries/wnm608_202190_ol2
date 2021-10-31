<?php 

include "../functions.php";


$users = file_get_json("../data/users.json");

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 
 	<title>User Admin Page</title>

    <base href="http://janaesmith.com/wnm608">
    <link rel="stylesheet" href="../css/storetheme.css">
    <link rel="stylesheet" href="../css/gridsystem.css">
    <link rel="stylesheet" href="../css/styleguide.css">
    <link rel="stylesheet" href="../css/styles.css">

 </head>
 <body>
 	

 <header class="navbar">
        <div class="container display-flex">
            <div class="flex-none">
                <h1>User Admin</h1>
            </div>
            <div class="flex-stretch">
            <nav class="nav nav-flex flex-none">
                <ul>
                    <li><a href="users.php">User List</a></li>
                    <li>Store</li>
                    <li>Cart</li>
                </ul>
            </nav>
        </div>
    </header>

 <div class="container">

 	<div class="card soft">
 		<h2>Users</h2>

        <?php 

        for ($i=0; $i <count($notes_object->notes) ; $i++) { 
            echo "<li>{$notes_object->notes[$i]}</li>";
        }

         ?>

 		
 		
 	</div>
        <div class="card soft">
        <h2>Users</h2>

        <?php 

        for ($i=0; $i <count($users_array) ; $i++) { 
            echo "<li>
            <strong>{$users_array[$i]->name}</strong>
            <span>{$users_array[$i]->type}</span>
            </li>";
        }
        
         ?>

        
        
    </div>
 </div>

 </body>
 </html>