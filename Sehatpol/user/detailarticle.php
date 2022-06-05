<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Article - SehatPol</title>
    <link rel="stylesheet" href="asset/css/article.css">
    
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
        <?php
            include"koneksi.php"; 
            $query = "SELECT * FROM artikel WHERE idA = '$_GET[idA]'";
            $result = mysqli_query($conn, $query);
            while ($data = mysqli_fetch_array($result)) {
        ?> 
   
		<div>
			<center><h3><?php echo $data["Judul"]; ?></h3></center>
        </div>
		
        <div>
            <img align="center" src="asset/img/artikel/<?php echo $data['Gambar'];?>" style="width: 100%; height: 100%;">
        </div>
        <?php } ?>
    </div>
		
	<footer>
        <div class="footer">
            <b><p align="center">SehatPol © 2022</p></b>
        </div>
    </footer> 
    
</body>
</html>