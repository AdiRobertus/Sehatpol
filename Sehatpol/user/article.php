<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article - SehatPol</title>
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
            <section id="article" style="margin-top: 30px; margin-bottom: 50px;">
                <h2 align="center">Article</h2>
                <br>
                <p align="center">Dengan fitur ini Anda bisa mendapatkan informasi kesehatan lainnya.</p>
                </br>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM artikel";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 

                <div class="content" method="post">  
                    <!-- blog -->  
                    <div class="border">  
                        <img src="asset/img/artikel/<?php echo $data['Gambar'];?>" align="left">  
                        <div class="con"><br/>
                            <h3><?php echo $data['Judul'];?></h3>  
                            <p><?php echo $data['Deskripsi'];?></p>  
                            <a href="detailarticle.php?idA=<?=$data['idA']?>"><button class="btn">Read More</button></a> 
                        </div>                              
                    </div>
                </div>
            
                <?php } ?>                   

            </section>
        </div>
		
	<footer>
        <div class="footer">
            <b><p align="center">SehatPol © 2022</p></b>
        </div>
    </footer> 
    
</body>
</html>