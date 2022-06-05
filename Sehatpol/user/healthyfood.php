<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthy Food - SehatPol</title>
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
                    </ul>
                </div>
            </div>
        </nav>    
    </header>
    
    <main>    
        <h4 align="center" style="margin-top: 30px;">
            <a href="#a" style="color: black;margin-right: 25px;">A</a>
            <a href="#b" style="color: black;margin-right: 23px;">B</a>
            <a href="#c" style="color: black;margin-right: 23px;">C</a>
            <a href="#d" style="color: black;margin-right: 23px;">D</a>
            <a href="#e" style="color: black;margin-right: 23px;">E</a>
            <a href="#f" style="color: black;margin-right: 23px;">F</a>
            <a href="#g" style="color: black;margin-right: 23px;">G</a>
            <a href="#h" style="color: black;margin-right: 23px;">H</a>
            <a href="#i" style="color: black;margin-right: 23px;">I</a>
            <a href="#j" style="color: black;margin-right: 23px;">J</a>
            <a href="#k" style="color: black;margin-right: 23px;">K</a>
            <a href="#l" style="color: black;margin-right: 23px;">L</a>
            <a href="#m" style="color: black;margin-right: 23px;">M</a>
            <a href="#n" style="color: black;margin-right: 23px;">N</a>
            <a href="#o" style="color: black;margin-right: 23px;">O</a>
            <a href="#p" style="color: black;margin-right: 23px;">P</a>
            <a href="#q" style="color: black;margin-right: 23px;">Q</a>
            <a href="#r" style="color: black;margin-right: 23px;">R</a>
            <a href="#s" style="color: black;margin-right: 23px;">S</a>
            <a href="#t" style="color: black;margin-right: 23px;">T</a>
            <a href="#u" style="color: black;margin-right: 23px;">U</a>
            <a href="#v" style="color: black;margin-right: 23px;">V</a>
            <a href="#w" style="color: black;margin-right: 23px;">W</a>
            <a href="#x" style="color: black;margin-right: 23px;">X</a>
            <a href="#y" style="color: black;margin-right: 25px;">Y</a>
            <a href="#z" style="color: black;">Z</a>
            <hr style="margin-top: 20px;">
        </h4>
        <h2 align="center" style="margin-top: 20px;">Healthy Food</h2>
        <p align="center" style="margin-top: 20px; margin-bottom: 40px;">Dengan fitur ini Anda bisa mendapatkan informasi kandungan gizi dan manfaat dari makanan sehat.</p><br>
        
        <!--abjad a-->
        <div class="wrapper">
            <section id="a" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">A</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE Nama like'A%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                            <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                            <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad b -->
            <section id="b" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">B</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'B%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>" class="bgfood">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad c -->
            <section id="c" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">C</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'C%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad d -->
            <section id="d" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">D</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'D%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad e -->
            <section id="e" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">E</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'E%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad f -->
            <section id="f" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">F</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'F%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad g -->
            <section id="g" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">G</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'G%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad h -->
            <section id="h" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">H</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'H%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad i -->
            <section id="i" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">I</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'I%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad j -->
            <section id="j" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">J</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'J%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad k -->
            <section id="k" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">K</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'K%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad l -->
            <section id="l" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">L</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'L%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad m -->
            <section id="m" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">M</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'M%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad n -->
            <section id="n" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">N</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'N%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad o -->
            <section id="o" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">O</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'O%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad p -->
            <section id="p" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">P</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'P%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad q -->
            <section id="q" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">Q</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'Q%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad r -->
            <section id="r" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">R</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'R%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad s -->
            <section id="s" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">S</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'S%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad t -->
            <section id="t" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">T</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'T%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad u -->
            <section id="u" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">U</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'U%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad v -->
            <section id="v" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">V</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'V%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad w -->
            <section id="w" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">W</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'W%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad x -->
            <section id="x" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">X</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'X%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad y -->
            <section id="y" style="margin-bottom: 30px;">
                <h4 style="margin-left: 22px">Y</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'Y%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>

            <!-- abjad z -->
            <section id="z" style="margin-bottom: 50px;">
                <h4 style="margin-left: 22px">Z</h4>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan WHERE nama LIKE'Z%'";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                    <form method="post" style="margin: 20px;">  
                        <div class="card" style="width: 185px; height: 175px;">
                            <div>
                                <img class="bgfood" align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>">
                            </div>
                            <div class="container">
                                <center><h4><?php echo $data["Nama"]; ?></h4></center>
                            </div>
                        </div>
                    </form>
                </a>
            
                <?php $i++; ?>
                <?php if($i%5==0) {  ?>
                </div>
                <?php } ?>
                    <?php } ?>
            </section>
        </div>      
    </main>

    <footer>
        <div style="background: #5CA40D; padding: 20px 0px 20px 0px">
            <b><p align="center">SehatPol © 2022</p></b>
        </div>
    </footer> 
    
</body>
</html>