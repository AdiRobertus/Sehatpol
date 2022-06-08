<?php 
 
include 'koneksi.php';
$id = $_POST['idR'];
$Judul = $_POST['Judul'];
$Link = $_POST['Link'];
$Kategori = $_POST['Kategori'];
 
mysqli_query($conn, "UPDATE resep SET Judul='$Judul', Link='$Link', Kategori='$Kategori' WHERE idR='$id'");
 
header("location:resep.php?pesan=update");
 
?>