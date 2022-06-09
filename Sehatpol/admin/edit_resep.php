<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Recipe || SehatPol</title>
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

	<?php 
	include "koneksi.php";
	$id = $_GET['idR'];
	$query_mysql = mysqli_query($conn,"SELECT * FROM resep WHERE idR='$id'")or die(mysqli_error());
	while($data = mysqli_fetch_array($query_mysql)){
	?>

	<h2 style="margin: 14px;">Edit Resep Makanan</h2>
	<form action="submit_edit_resep.php" method="post" style="margin: 14px;">		
		<table>
			<tr>
				<td>Judul Resep</td>
			</tr>
			<tr>
				<input type="hidden" name="idR" value="<?php echo $data['idR'] ?>">
				<td><input type="text" name="Judul" value="<?php echo $data['Judul'] ?>" class="form-control"></td>					
			</tr>	
			<tr>
				<td>Link Video</td>
			</tr>
			<tr>
				<td><input type="text" name="Link" value="<?php echo $data['Link'] ?>" class="form-control"></td>					
			</tr>	
			<tr>
				<td>Kategori</td>
			</tr>
			<tr>
				<td>
					<select name="Kategori" value="<?php echo $data['Link'] ?>" class="form-select">
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
	<?php } ?>
	
	<footer>
		<ul class="navbar navbar-expand-lg navbar fixed-bottom navbar-dark nav justify-content-center" style="background-color: #5CA40D;">
			<li class="nav-item" style="color: #fff">Copyright 2022<li>
		</ul>	
	</footer>
</body>
</html>
