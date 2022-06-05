<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curahin - SehatPol</title>
    <link rel="stylesheet" href="asset/css/curahin.css"> 
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
        <h2 align="center" style="margin-top: 30px;">Curahin</h2><br/>
        <p align="center">Dengan fitur ini Anda bisa melakukan konsultasi dengan ahli gizi.</p>
        <div class="wrapper" style="margin-top: 45px; margin-bottom: 50px;">
            <form action="submit_curahin.php" method="post">  
                <div class="colom">
                    <div> 
                        Nama <br/>
                        <input type="text" name="Nama" class="inputan"><br/>
                    </div>
                    <div>     
                        Telepon <br/>
                        <input type="text" name="Telepon" class="inputan"><br/>
                    </div>
                    <div>       
                        Email <br/>
                        <input type="text" name="Email" class="inputan" style="margin-bottom: 20px;"><br/>
                    </div>
                </div>
                Tuliskan Masalah Anda <br/>
                <textarea name="Keluhan"></textarea><br/>
                <center><input type="submit" name="submit" value="Kirim" class="btn"></center>
            </form>   
        </div>
    </main>

    <footer>
        <div class="footer">
            <b><p align="center">SehatPol © 2022</p></b>
        </div>
    </footer> 
    
</body>
</html>