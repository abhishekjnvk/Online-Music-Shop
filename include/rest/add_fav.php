<?php
include('../connection.php');

  $artist=$_GET['artist'];
  $songName=$_GET['songName'];
  $coverImage=$_GET['coverImage'];
  $url=$_GET['url'];
  $email=$_GET['email'];
  $check_already_added="select * from fav_songs WHERE email='$email' AND url='$url'";
  $run=mysqli_query($mysqli,$check_already_added);
  if(mysqli_num_rows($run)>0){
    echo "Already Added";
  }
  else {
    $sql= mysqli_query($mysqli,"INSERT INTO fav_songs(songName,artist,url,albumPic,email) VALUES('".$songName."','".$artist."','".$url."','".$coverImage."','".$email."')");
    if($sql){
    echo "Added to your favourite list";
    }
    else {
    echo "Failed";
    }

  }
?>
