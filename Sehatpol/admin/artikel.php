<!DOCTYPE html>
<html lang="en">
<head>
	<title>Article - SehatPol</title>
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

	<h3>Input Artikel</h3>
	<form action="submit_artikel.php" method="post">		
		<table>
			<tr>
				<td>Nama Penulis</td>
				<td>Tanggal Upload</td>
			</tr>
			<tr>
				<td>
					<select name="nama" class="form-select">
						<?php 
						include "koneksi.php";
						$perintah="select * from admin";
						$query1=mysqli_query($conn, $perintah);
						while ($data=mysqli_fetch_array($query1)) { ?>
						<option value="pilih">
							<?php
							echo$data['Nama']; ?>
						</option>
						<?php } ?>
					</select>
				</td>		
				<td>
					<input type="date" name="tanggal" class="form-control">	
				</td>			
			</tr>	
			<tr>
				<td>Judul Artikel</td>
				<td>Kategori</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="judul" class="form-control">
				</td>					
				<td>
					<select name="Kategori" class="form-select">
						<option>Tips and Tricks</option>
						<option>Lifestyle</option>
						<option>Sports</option>
					</select>
				</td>
			</tr>	
			<tr>
				<td>Gambar</td>
			</tr>
			<tr>
				<td>
					<input type="file" accept="image/*" name="gambar"class="form-control-file">
				</td>					
			</tr>
			<tr>
				<td>isi Artikel</td>
			</tr>
			<tr>
				<td>
					<textarea class="form-control" name="isi"></textarea>
				</td>					
			</tr>
			<tr>
				<td><input class="btn btn-primary" type="submit" value="Submit" style="background-color: #FDAD30; border-color: #FDAD30;"></td>					
			</tr>				
		</table>
	</form>

	<div class="main nav justify-content-center" style="margin: 14px;">
		<h3>Data Artikel</h3>
		<table class="table table-success table-striped">
		<tr>
			<th>No</th>
			<th>Gambar</th>
			<th>Judul Artikel</th>
			<th>Kategori</th>
			<th>Isi Artikel</th>
			<th>Aksi</th>
		</tr>
	<?php  
	include "koneksi.php";
	$result = mysqli_query($conn, "SELECT * FROM artikel ORDER BY idA");
    while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data['idA']."</td>";
        echo "<td>".$data['Gambar']."</td>";
        echo "<td>".$data['Judul']."</td>";
        echo "<td>".$data['Kategori']."</td>"; 
        echo "<td>".$data['Deskripsi']."</td>";    
        echo "<td><a href='edit_artikel.php?idA=$data[idA]'>Edit</a> | <a href='hapus_artikel.php?idA=$data[idA]' onClick=\"return confirm('Are You Sure ?')\">Delete</a></td></tr>";        
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
