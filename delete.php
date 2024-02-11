<?php 
include_once("koneksi.php");

$id = $_GET['id'];
$query = "DELETE FROM users WHERE id=$id";

$result = mysqli_query($connection, $query);
$result = "yang ingin dihapus adalah id: " . $id;

header("Location:index.php?result_delete=$result");
?>
