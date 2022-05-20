<?php
include_once("koneksi.php");

$idR = $_GET['idR'];
$query = "DELETE FROM resep WHERE idR=$idR";
mysqli_query($conn, $query);

header("Location:resep.php");
?>