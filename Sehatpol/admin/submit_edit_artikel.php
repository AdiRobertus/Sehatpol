<?php 
include 'koneksi.php';
$id = $_POST['idA'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$judul = $_POST['judul'];
$kategori = $_POST['Kategori'];
$gambar = $_POST['gambar'];
$isi = $_POST['isi'];
 
mysqli_query($conn,"UPDATE artikel SET Judul='$judul', Kategori=$kategori, Gambar='$gambar', Tgl='$tanggal', Penulis='$nama', Deskripsi='$isi' WHERE idA='$id'");
 
header("location:artikel.php?pesan=update");
?>