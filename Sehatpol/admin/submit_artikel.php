<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$judul = $_POST['judul'];
$gambar = $_POST['gambar'];
$isi = $_POST['isi'];
 
mysqli_query($conn,"INSERT INTO artikel VALUES('','1','$judul','$gambar','$tanggal','$nama','$isi')");
 
header("location:artikel.php?pesan=input");
?>