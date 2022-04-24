<?php
include_once("koneksi.php");

$idM = $_GET['idM'];
$query = "DELETE FROM masukan WHERE idM=$idM";
mysqli_query($conn, $query);

header("Location:masukan.php");
?>