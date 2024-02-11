<form style="display:flex; flex-direction: column; gap: 10px;" action="add.php" method="POST">
  <label for="user">user</label>
  <input id="user" name="user" type="text" placeholder="parjono"/>
  <label for="phone">telp</label>
  <input id="phone" name="phone" type="tel" placeholder="(+62) 896 4924 6450"/>

  <label for="email">email</label>
  <input id="email" name="email" type="email" placeholder="try@example.com"/>
  <button type="submit" name="tambah_user">kirim</button>
</form>

<?php
include_once("koneksi.php");

if(isset($_POST['tambah_user'])){
  $user = $_POST['user'];
  $telp = $_POST['phone'];
  $email = $_POST['email'];

  $query = "INSERT INTO users(nama,telp,email) VALUES('$user','$telp','$email')";
  $result = mysqli_query($connection, $query);

  $result = "anda berhasil membuat profile dengan nama: " . $user;
  header("Location:index.php?result_create=$result");
}
?>
