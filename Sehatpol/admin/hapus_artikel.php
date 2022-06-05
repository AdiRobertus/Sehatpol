<?php
include_once("koneksi.php");

$idA = $_GET['idA'];
$query = "DELETE FROM artikel WHERE idA=$idA";
mysqli_query($conn, $query);

header("Location:artikel.php");
?>