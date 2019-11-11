<?php
// error_reporting(0);
  $artist=$_GET['artist'];
  $songName=$_GET['songName'];
  $coverImage=$_GET['coverImage'];
  $url=$_GET['url'];
  $email=$_GET['email'];
  date_default_timezone_set('Asia/Kolkata');
  $date = date('d.m.Y h:i:s');
  $conn = new mysqli("localhost", "root", "", "music_shop");
  $sql= mysqli_query($conn,"INSERT INTO last_played(songName,artist,url,albumPic,email,time) VALUES('".$songName."','".$artist."','".$url."','".$coverImage."','".$email."','".$date."')");
?>
