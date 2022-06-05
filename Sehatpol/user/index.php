<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - SehatPol</title>
    <link rel="stylesheet" href="asset/css/style.css">
    
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
                        <li><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#healthyfood">Healthy Food</a></li>
                        <li><a href="#curahin">Curahin</a></li>
                        <li><a href="#article">Article</a></li>
                        <li><a href="#recipe">Recipe</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>    
    </header>
    
    <!--slide banner-->
    <main>
        <div class="myslide">
            <img src="asset/img/slide.jpg" style="width: 100%; height: 100%x;">
        </div>
            
        <div class="myslide">
            <img src="asset/img/slide2.jpg" style="width: 100%; height: 100%;">
        </div>
            
        <div class="myslide">
            <img src="asset/img/slide3.jpg" style="width: 100%; height: 100%;">
        </div>
            
        <div class="myslide">
            <img src="asset/img/slide4.jpg" style="width: 100%; height: 100%;">
        </div>
            
        <!-- onclick js -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
            
        <div class="dotsbox" style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>

        <!--about-->
        <div class="wrapper">
            <section id="about" class="colom" style="margin-top: 20px; margin-bottom: 50px;">
                <img src="asset/img/sehatpol.png" style="width: 531px; height: 168px; margin-top: 80px">
                <div class="text">
                    <h2>Website SehatPol</h2>
                    <br>
                    <p align="justify">SehatPol hadir memberikan solusi untuk pola makan yang sehat. SehatPol merupakan sistem informasi berbasis website yang fokus ke masalah makanan dan kesehatan. Website ini bertujuan untuk memberikan informasi tentang kandungan gizi dan manfaat dari makanan sehat, konsultasi makanan sehat dengan ahli kesehatan, artikel tentang makanan sehat dan resep masakan dari makanan sehat.</p>
                </div>
            </section>
        </div>

        <!--healthy food-->
        <div class="wrapper">
            <section id="healthyfood" style="margin-top: 20px; margin-bottom: 20px;">
                <h2 align="center">Healthy Food</h2>
                <br>
                <p align="center">Dengan fitur ini Anda bisa mendapatkan informasi kandungan gizi dan manfaat dari makanan sehat.</p><br>


                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM makanan limit 5";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                
                <?php if ($i%5==0) { ?>
                <div class="colom">
                <?php } ?>

                    <a href="detailfood.php?KodeM=<?=$data['KodeM']?>">
                        <form method="post" style="margin: 20px;">  
                            <div class="card" style="width: 185px; height: 175px;">
                                <div style="border-radius: 5px;">
                                    <img align="center" src="asset/img/makanan/<?php echo $data['Gambar'];?>" style="width: 100%; height: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
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
            <p align="right"><a href="healthyfood.php" class="btn">Lihat Lainnya</a></p>
        </div>
        
        <!--curahin-->
        <div class="wrapper">
            <section id="curahin" style="margin-top: 100px; margin-bottom: 50px;">
                <h2 align="center">Curahin</h2><br>
                <center><img src="asset/img/konsultasi.png" style="width: 500px; height: 200px; border-radius: 10px;"></center>
                <br>
                <p align="center">Ingin berkonsultasi dengan ahli gizi?</p>
                <p align="center" style="padding: 3px 0px 15px 0px;">Dengan fitur ini Anda bisa konsultasi gratis untuk menyusun rekomendasi asupan gizi atau menu harian Anda dan sebagai media untuk menyampaikan keluh kesah tentang kesehatan Anda</p><br>
                <p align="center"><a href="curahin.php" class="btn">Mulai Konsultasi</a></p>
            </section>
        </div>

        <!--Article-->
        <div class="wrapper">
            <section id="article" style="margin-top: 100px; margin-bottom: 50px;">
                <h2 align="center">Article</h2>
                <br>
                <p align="center">Dengan fitur ini Anda bisa mendapatkan informasi kesehatan lainnya.</p>
                <br>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM artikel LIMIT 3";  
                    $result = mysqli_query($conn, $query); 
                    while($data = mysqli_fetch_array($result)) {  
                ?> 
                <form method="post">
                <div class="content">  
                    <!-- blog -->  
                    <div class="border">  
                        <img src="asset/img/artikel/<?php echo $data['Gambar'];?>" align="left">  
                        <div class="con"><br> 
                            <h3><?php echo $data['Judul'];?></h3>  
                            <p><?php echo $data['Deskripsi'];?></p>  
                            <a href="detailarticle.php?idA=<?=$data['idA']?>"><button class="btn1">Read More</button></a> 
                        </div>                              
                    </div>
                </div>
                </form>
            
                <?php } ?>
                <p align="right" style="margin-top: 30px;"><a href="article.php" class="btn">Lihat Lainnya</a></p>                    

            </section>
        </div>

        <!--Recipe-->
        <div class="wrapper">
            <section id="recipe" style="margin-top: 100px; margin-bottom: 100px;">
                <h2 align="center">Recipe</h2>
                <br>
                <p align="center">Dengan fitur ini Anda bisa melihat tutorial mengolah makanan sehat.</p>
                <?php $i=0; ?>
                <?php 
                    include"koneksi.php"; 
                    $query = "SELECT * FROM resep LIMIT 3";  
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
                <p align="right" style="margin-top: 30px;"><a href="recipe.php" class="btn">Lihat Lainnya</a></p>                    
            </section>
        </div>
    </main>

    <!--Contact-->
    <footer>
        <section id="contact">
            <div class="footer-distributed">
                <div class="footer-left">
                    <img src="asset/img/sehatpol.png" style="width: 220px; height: 65px; margin-top: 5px">
                    <p class="footer-company-name">SehatPol © 2022</p>
                    <div class="footer-icons">
                        <a href="#"><img src="asset/img/logo/instagram.png" style="width:35px"></a>
                        <a href="#"><img src="asset/img/logo/email.png" style="width:35px"></a>
                        <a href="#"><img src="asset/img/logo/twitter.png" style="width:35px"></a>
                        <a href="#"><img src="asset/img/logo/youtube.png" style="width:35px"></a>
                    </div>
                </div>
                <div class="footer-right">
                    <p>Send Messages</p>
                    <form action="#" method="post">
                        <input type="text" name="email" placeholder="Email or Telephone">
                        <textarea name="message" placeholder="Message"></textarea>
                        <button>Send</button>
                    </form>
                </div>
            </div>
        </section>
    </footer>  
        
    <script src="asset/js/jsfile.js"></script>
</body>
</html>