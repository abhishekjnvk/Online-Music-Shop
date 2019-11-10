<?php
// error_reporting(0);
  $email=$_GET['email'];
  $conn = new mysqli("localhost", "root", "", "music_shop");
  $sql= mysqli_query($conn,"DELETE FROM last_played WHERE email = '".$email."'");
?>
