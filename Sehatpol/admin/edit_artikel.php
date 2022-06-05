<!DOCTYPE html>
<html lang="en">
<head>
	<title>Masukan || SehatPol</title>
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

	<?php 
	include "koneksi.php";
	$id = $_GET['idA'];
	$query_mysql = mysqli_query($conn,"SELECT * FROM artikel WHERE idA='$id'")or die(mysqli_error());
	while($data = mysqli_fetch_array($query_mysql)){
	?>

	<h3>Input Artikel</h3>
	<form action="submit_edit_artikel.php" method="post">		
		<table>
			<tr>
				<td>Nama Penulis</td>
				<td>Tanggal Upload</td>
			</tr>
			<tr>
				<input type="hidden" name="idA" value="<?php echo $data['idA'] ?>">
				<td>
					<select name="nama">
						<?php 
						include "koneksi.php";
						$perintah="select * from admin";
						$query1=mysqli_query($conn, $perintah);
						while ($data=mysqli_fetch_array($query1)) { ?>
						<option value="<?php echo $data['Nama'] ?>">
							<?php
							echo$data['Nama']; ?>
						</option>
						<?php } ?>
					</select>
				</td>		
				<td>
					<input type="date" name="tanggal" value="<?php echo $data['Tgl'] ?>">	
				</td>			
			</tr>	
			<tr>
				<td>Judul Artikel</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="judul" value="<?php echo $data['Judul'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Gambar</td>
			</tr>
			<tr>
				<td>
					<input type="file" accept="image/*" name="gambar" value="<?php echo $data['Gambar'] ?>">
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
	<?php } ?>
	<footer>
		<ul class="navbar navbar-expand-lg navbar fixed-bottom navbar-dark nav justify-content-center" style="background-color: #5CA40D;">
			<li class="nav-item" style="color: #fff">Copyright 2022<li>
		</ul>	
	</footer>
</body>
</html>
