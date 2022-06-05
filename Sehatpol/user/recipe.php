<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe - SehatPol</title>
    <link rel="stylesheet" href="asset/css/recipe.css">
    
</head>
<body>
    <header>
        <nav>
            <div class="wrapper">
                <div class="logo">
                    <a href="index.php">
                        <img src="asset/img/sehatpol-logo.png" style="width: 210px; height: 60px;">
                    </a>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php #about">About</a></li>
                        <li><a href="healthyfood.php">Healthy Food</a></li>
                        <li><a href="curahin.php">Curahin</a></li>
                        <li><a href="article.php">Article</a></li>
                        <li><a href="recipe.php">Recipe</a></li>
                        <li><a href="index.php #contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>    
    </header>
	
	<div class="wrapper">
		<div id="recipe" style="margin-top: 30px; margin-bottom: 100px;">
                <h2 align="center">Recipe</h2>
                <br>
                <p align="center">Dengan fitur ini Anda bisa melihat tutorial mengolah makanan sehat.</p>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM resep";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_assoc($result)) {  
                ?> 
                <?php if ($i%3==0) { ?>
                <center><div class="colom2">
                <?php } ?>

                    <iframe width="350" height="200" src="https://www.youtube.com/embed/<?php echo $data["Link"]; ?>?autoplay=1&autohide=1&controls=1&showinfo=0&modestbranding=1&rel=0">
                    </iframe>           

                <?php $i++; ?>
                    <?php if($i%3==0) {  ?>
                </div>
                    <?php } ?>
                <?php } ?>
                </center>                  
        </div>    
    </div>
		

    <footer>
        <div class="footer">
            <b><p align="center">SehatPol © 2022</p></b>
        </div>
    </footer> 
	
</body>
</html>