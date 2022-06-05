<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Healthy Food - SehatPol</title>
    <link rel="stylesheet" href="asset/css/healthyfood.css"> 
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
                    </ul>                    </ul>
                </div>
            </div> 
        </nav>    
    </header>
    
    <main>
        <h4 align="center" style="margin-top: 30px;">
            <a href="healthyfood.php #a" style="color: black;margin-right: 25px;">A</a>
            <a href="healthyfood.php #b" style="color: black;margin-right: 23px;">B</a>
            <a href="healthyfood.php #c" style="color: black;margin-right: 23px;">C</a>
            <a href="healthyfood.php #d" style="color: black;margin-right: 23px;">D</a>
            <a href="healthyfood.php #e" style="color: black;margin-right: 23px;">E</a>
            <a href="healthyfood.php #f" style="color: black;margin-right: 23px;">F</a>
            <a href="healthyfood.php #g" style="color: black;margin-right: 23px;">G</a>
            <a href="healthyfood.php #h" style="color: black;margin-right: 23px;">H</a>
            <a href="healthyfood.php #i" style="color: black;margin-right: 23px;">I</a>
            <a href="healthyfood.php #j" style="color: black;margin-right: 23px;">J</a>
            <a href="healthyfood.php #k" style="color: black;margin-right: 23px;">K</a>
            <a href="healthyfood.php #l" style="color: black;margin-right: 23px;">L</a>
            <a href="healthyfood.php #m" style="color: black;margin-right: 23px;">M</a>
            <a href="healthyfood.php #n" style="color: black;margin-right: 23px;">N</a>
            <a href="healthyfood.php #o" style="color: black;margin-right: 23px;">O</a>
            <a href="healthyfood.php #p" style="color: black;margin-right: 23px;">P</a>
            <a href="healthyfood.php #q" style="color: black;margin-right: 23px;">Q</a>
            <a href="healthyfood.php #r" style="color: black;margin-right: 23px;">R</a>
            <a href="healthyfood.php #s" style="color: black;margin-right: 23px;">S</a>
            <a href="healthyfood.php #t" style="color: black;margin-right: 23px;">T</a>
            <a href="healthyfood.php #u" style="color: black;margin-right: 23px;">U</a>
            <a href="healthyfood.php #v" style="color: black;margin-right: 23px;">V</a>
            <a href="healthyfood.php #w" style="color: black;margin-right: 23px;">W</a>
            <a href="healthyfood.php #x" style="color: black;margin-right: 23px;">X</a>
            <a href="healthyfood.php #y" style="color: black;margin-right: 25px;">Y</a>
            <a href="healthyfood.php #z" style="color: black;">Z</a>
        </h4>
        <div class="wrapper" style="margin-top: 40px; margin-bottom: 50px;">
            <div class="colom card" style=" background: white;">
                <div>
                    <?php
                        include"koneksi.php"; 
                        $query = "SELECT * FROM makanan WHERE KodeM = '$_GET[KodeM]'";
                        $result = mysqli_query($conn, $query);
                        while ($data = mysqli_fetch_array($result)) {
                    ?> 
                        <div class="card" style="width: 300px; height: 270px;">
                            <div>
                            <img align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>" style="width: 100%; height: 100%;">
                            </div>
                            <div class="container">
                            <center><h3><?php echo $data["Nama"]; ?></h3></center>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div style="margin-top: 25px; margin-left: 50px">
                    <h3 style="margin-bottom: 30px;">Informasi Kandungan Gizi</h3>
                    <div class="colom">
                        <div style="margin-right: 30px;">
                            <p style="margin-bottom: 10px;">Mineral</p>  
                            <p style="margin-bottom: 10px;">Vitamin</p>  
                            <p style="margin-bottom: 10px;">Serat</p>  
                            <p style="margin-bottom: 10px;">Protein</p>  
                            <p style="margin-bottom: 10px;">Glukosa</p>  
                            <p style="margin-bottom: 10px;">Kalori</p>  
                        </div>

                    <?php
                        include"koneksi.php"; 
                        $query = "SELECT * FROM gizi WHERE KodeM = '$_GET[KodeM]'";
                        $result = mysqli_query($conn, $query);
                        while ($data = mysqli_fetch_array($result)) {
                    ?> 
                    
                        <div style="margin-right: 10px;">
                            <p style="margin-bottom: 10px;">: <?php echo $data["Mineral"]; ?></p>  
                            <p style="margin-bottom: 10px;">: <?php echo $data["Vitamin"]; ?></p>  
                            <p style="margin-bottom: 10px;">: <?php echo $data["Serat"]; ?></p>  
                            <p style="margin-bottom: 10px;">: <?php echo $data["Protein"]; ?></p>  
                            <p style="margin-bottom: 10px;">: <?php echo $data["Glukosa"]; ?></p>  
                            <p style="margin-bottom: 10px;">: <?php echo $data["Kalori"]; ?></p>  
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>

            <div>
                <h3 style="margin-bottom: 20px; margin-top: 40px;">Manfaat untuk Kesehatan</h3>

                <?php
                    include"koneksi.php";                 
                    $query = "SELECT * FROM gizi WHERE KodeM = '$_GET[KodeM]'";
                    $result = mysqli_query($conn, $query);
                    while ($data = mysqli_fetch_array($result)) {
                ?> 
                    <p style="margin-bottom: 10px;"><?php echo $data["Manfaat"]; ?></p>  
 
                <?php } ?>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer">
            <b><p align="center">SehatPol © 2022</p></b>
        </div>
    </footer> 
    
</body>
</html>