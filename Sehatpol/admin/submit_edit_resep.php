<?php 
 
include 'koneksi.php';
$id = $_POST['idR'];
$Judul = $_POST['Judul'];
$Link = $_POST['Link'];
 
mysqli_query($conn, "UPDATE resep SET Judul='$Judul', Link='$Link' WHERE idR='$id'");
 
header("location:resep.php?pesan=update");
 
?>