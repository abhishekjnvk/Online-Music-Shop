<?php
// error_reporting(0);
  $email=$_GET['email'];
    $url=$_GET['url'];
  $conn = new mysqli("localhost", "root", "", "music_shop");
  $sql= mysqli_query($conn,"DELETE FROM fav_songs WHERE email = '".$email."' AND url = '".$url."'");
?>
