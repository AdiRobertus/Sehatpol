<!DOCTYPE html>
<html lang="en">
<head>
	<title>Article - SehatPol</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="asset/css/masukan.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
	<!-- button color FDAD30; table header color  -->
	<nav>
		<ul class="navbar navbar-expand-lg navbar-dark nav justify-content-end" style="background-color: #5CA40D; color: #fff;">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="#">
		      <img src="asset/img/sehatpol-logo.png" alt="" width="100" height="28" class="d-inline-block align-text-top">
		    </a>
		  </div>
		  <li class="nav-item">
		    <a class="nav-link" href="#" style="color: #fff;">Home</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#" style="color: #fff;">HealtyFood</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#" style="color: #fff;">Curahin</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#" style="color: #fff;">Article</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#" style="color: #fff;">Recipe</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#" style="color: #fff;">Masukan</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#" style="color: #fff;">Logout</a>
		  </li>
		</ul>
	</nav>

	<h3>Input Artikel</h3>
	<form action="submit_artikel.php" method="post">		
		<table>
			<tr>
				<td>Nama Penulis</td>
				<td>Tanggal Upload</td>
			</tr>
			<tr>
				<td>
					<select name="nama">
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
					<input type="date" name="tanggal">	
				</td>			
			</tr>	
			<tr>
				<td>Judul Artikel</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="judul">
				</td>					
			</tr>	
			<tr>
				<td>Gambar</td>
			</tr>
			<tr>
				<td>
					<input type="file" accept="image/*" name="gambar">
				</td>					
			</tr>
			<tr>
				<td>isi Artikel</td>
			</tr>
			<tr>
				<td>
					<textarea name="isi"></textarea>
				</td>					
			</tr>
			<tr>
				<td><input type="submit" value="Submit"></td>					
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
        echo "<td>".$data['Deskripsi']."</td>";    
        echo "<td><a href='edit_artikel.php?idA=$data[idA]'>Edit</a> | <a href='hapus_artikel.php?idA=$data[idA]' onClick=\"return confirm('Are You Sure ?')\">Delete</a></td></tr>";        
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
