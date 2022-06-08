<?php 
include 'koneksi.php';
$Judul = $_POST['Judul'];
$Link = $_POST['Link'];
$Kategori = $_POST['Kategori'];
 
mysqli_query($conn,"INSERT INTO resep VALUES('','$Judul','$Link','$Kategori')");
 
header("location:resep.php?pesan=input");
?>