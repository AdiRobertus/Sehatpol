<!DOCTYPE html>
<html lang="en">
<head>
	<title>Recipe - SehatPol</title>
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

	<h2 style="margin: 14px;">Input Resep Makanan</h2>
	<form action="submit_resep.php" method="post" style="margin: 14px;">		
		<table>
			<tr>
				<td>Judul Resep</td>
			</tr>
			<tr>
				<td><input type="text" name="Judul" class="form-control"></td>					
			</tr>	
			<tr>
				<td>Link Video</td>
			</tr>
			<tr>
				<td><input type="text" name="Link" class="form-control"></td>					
			</tr>		
			<tr>
				<td>Kategori</td>
			</tr>
			<tr>
				<td>
					<select name="Kategori" class="form-select">
						<option>Camilan</option>
						<option>Makanan Utama</option>
						<option>Anak</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><input class="btn btn-primary" type="submit" value="Submit" style="background-color: #FDAD30; border-color: #FDAD30;"></td>					
			</tr>		
		</table>
	</form>

	<div class="main nav justify-content-center" style="margin: 14px;">
		<h3>Data Resep Makanan</h3>
		<table class="table table-success table-striped">
		<tr>
			<th>No</th>
			<th>Judul Resep Makanan</th>
			<th>Link Video</th>
			<th>Kategori</th>
			<th>Aksi</th>
		</tr>
	<?php  
	include "koneksi.php";
	$result = mysqli_query($conn, "SELECT * FROM resep ORDER BY idR");
    while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data['idR']."</td>";
        echo "<td>".$data['Judul']."</td>";
        echo "<td>".$data['Link']."</td>"; 
        echo "<td>".$data['Kategori']."</td>";    
        echo "<td><a href='edit_resep.php?idR=$data[idR]'>Edit</a> | <a href='hapus_resep.php?idR=$data[idR]' onClick=\"return confirm('Are You Sure ?')\">Delete</a></td></tr>";        
    }
    ?>
	</table>
	</div>
	
	<footer>
		<ul class="navbar navbar-expand-lg navbar fixed-bottom navbar-dark nav justify-content-center" style="background-color: #5CA40D; position: static;">
			<li class="nav-item" style="color: #fff">Copyright 2022<li>
		</ul>	
	</footer>
</body>
</html>
