<!DOCTYPE html>
<html lang="en">
<head>
	<title>Masukan - SehatPol</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="asset/css/main.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
                        <li><a href="">Home</a></li>
                        <li><a href="">Healthy Food</a></li>
                        <li><a href="">Curahin</a></li>
                        <li><a href="artikel.php">Article</a></li>
                        <li><a href="resep.php">Recipe</a></li>
                        <li><a href="masukan.php">Masukan</a></li>
                        <li><a href="">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>    
    </header>


	<div class="main nav justify-content-center" style="margin: 14px;">
		<h2>Data Masukan</h2>
		<table class="table table-success table-striped">
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Email or Telephone</th>
			<th>Aksi</th>
		</tr>
	<?php  
	include "koneksi.php";
	$result = mysqli_query($conn, "SELECT * FROM masukan ORDER BY idM");
    while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data['idM']."</td>";
        echo "<td>".$data['Email_Telepon']."</td>";
        echo "<td>".$data['Masukan']."</td>";    
        echo "<td><a href='hapus_masukan.php?idM=$data[idM]' onClick=\"return confirm('Are You Sure ?')\">Delete</a></td></tr>";        
    }
    ?>
	</table>
	</div>
	
	<footer>
		<ul class="navbar navbar-expand-lg navbar fixed-bottom navbar-dark nav justify-content-center" style="background-color: #5CA40D;">
			<li class="nav-item" style="color: #fff">Copyright 2022<li>
		</ul>	
	</footer>
</body>
</html>
