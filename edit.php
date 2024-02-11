<?php
include_once("koneksi.php");

$id = $_GET['id'];

if(isset($id)){
  $query = "SELECT * FROM users WHERE id=$id";
  $result = mysqli_query($connection, $query);
  // echo $result;

  while($data = mysqli_fetch_array($result))
  {
    $user_id = $data['id'];
    $nama = $data['nama'];
    $telp = $data['telp'];
    $email = $data['email'];
  }
}
// else {
//   header('Location:index.php');
// }
?>

<h1>anda sedang mengedit user dengan id: <?php echo $user_id?></h1>
<form style="display:flex; flex-direction: column; gap: 10px;" action="edit.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $id?>"/>
  <label for="user">user</label>
  <input id="user" name="user" type="text" placeholder="parjono" value="<?php echo $nama?>"/>
  <label for="phone">telp</label>
  <input id="phone" name="phone" type="tel" placeholder="(+62) 896 4924 6450" value="<?php echo $telp?>"/>

  <label for="email">email</label>
  <input id="email" name="email" type="email" placeholder="try@example.com" value="<?php echo $email?>"/>
  <button type="submit" name="perbarui_user">perbarui</button>
</form>


<?php

if(isset($_POST['perbarui_user'])){
  $form_id = $_POST['id'];
  $form_nama = $_POST['user'];
  $form_telp = $_POST['phone'];
  $form_email = $_POST['email'];

  $query = "UPDATE users SET nama='$form_nama', telp='$form_telp', email='$form_email' WHERE users.id=$form_id";
  $response = mysqli_query($connection, $query);
  header('Location:index.php');
}


?>

