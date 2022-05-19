<?php 
include 'koneksi.php';
$Judul = $_POST['Judul'];
$Link = $_POST['Link'];
 
mysqli_query($conn,"INSERT INTO resep VALUES('','$Judul','$Link')");
 
header("location:resep.php?pesan=input");
?>