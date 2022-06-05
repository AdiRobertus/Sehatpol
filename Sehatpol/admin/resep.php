<!DOCTYPE html>
<html lang="en">
<head>
	<title>Recipe - SehatPol</title>
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
		    <a class="nav-link" href="index.php" style="color: #fff;">Home</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="healthyfood.php" style="color: #fff;">HealtyFood</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="curahin.php" style="color: #fff;">Curahin</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="artikel.php" style="color: #fff;">Article</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="resep" style="color: #fff;">Recipe</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="masukan.php" style="color: #fff;">Masukan</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#" style="color: #fff;">Logout</a>
		  </li>
		</ul>
	</nav>

	<h2 style="margin: 14px;">Input Resep Makanan</h2>
	<form action="submit_resep.php" method="post" style="margin: 14px;">		
		<table>
			<tr>
				<td>Judul Resep</td>
			</tr>
			<tr>
				<td><input type="text" name="Judul"></td>					
			</tr>	
			<tr>
				<td>Link Video</td>
			</tr>
			<tr>
				<td><input type="text" name="Link"></td>					
			</tr>
			<tr>
				<td style="margin-top: 100px;"><input type="submit" value="Submit"></td>					
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
        echo "<td><a href='edit_resep.php?idR=$data[idR]'>Edit</a> | <a href='hapus_resep.php?idR=$data[idR]' onClick=\"return confirm('Are You Sure ?')\">Delete</a></td></tr>";        
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
