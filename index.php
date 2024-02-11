
<?php 
include("./koneksi.php");

$query = "SELECT * FROM users ORDER BY id DESC";
$sql = mysqli_query($connection, $query);


?>

<a href="add.php"><button>tambah pengguna</button></a>
<h1>table user</h1>
<table>
  <thead>
    <th>no</th>
    <th>nama</th>
    <th>telp</th>
    <th>email</th>
    <th>action</th>
  </thead>
  <tbody>
<?php  
while($result = mysqli_fetch_array($sql)) {         
  echo "<tr>";
  echo "<td>". $result['id'] ."</td>";
  echo "<td>". $result['nama'] ."</td>";
  echo "<td>". $result['telp'] ."</td>";
  echo "<td>". $result['email'] ."</td>";
  echo "<td>";
  echo "<a href='delete.php?id=$result[id]'><button>hapus</button></a>";
  echo "<a href='edit.php?id=$result[id]'><button>edit</button></a>";
  echo "</td>";
  echo "</tr>";
}
?>
  </tbody>
</table>

<?php
$result_delete = $_GET['result_delete'];
$result_create = $_GET['result_create'];

if (isset($result_delete)) {
  echo "<script>";
  echo "alert('$result_delete')";
  echo "</script>";
}

if (isset($result_create)) {
  echo "<script>";
  echo "alert('$result_create')";
  echo "</script>";
}

?>


