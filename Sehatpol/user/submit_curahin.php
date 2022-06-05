<?php 
include 'koneksi.php';
$Nama = $_POST['Nama'];
$Telepon = $_POST['Telepon'];
$Email = $_POST['Email'];
$Keluhan = $_POST['Keluhan'];
 
mysqli_query($conn,"INSERT INTO curahin VALUES('','$Nama','$Telepon', '$Email', '$Keluhan')");
 
header("location:curahin.php?pesan=input");
?>