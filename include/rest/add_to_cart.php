<?php
error_reporting(0);
include('../connection.php');

  $artist=$_GET['artist'];
  $songName=$_GET['songName'];
  $coverImage=$_GET['coverImage'];
  $url=$_GET['url'];
  $email=$_GET['email'];
  $price="10";
  $check_already_added="select * from cart WHERE email='$email' AND url='$url'";
  $run=mysqli_query($mysqli,$check_already_added);
  if(mysqli_num_rows($run)>0){
    echo "Already In cart";
  }
  else {
    $sql= mysqli_query($mysqli,"INSERT INTO cart(songName,artist,price,coverimage,email,url) VALUES('".$songName."','".$artist."','".$price."','".$coverImage."','".$email."','".$url."')");
    if($sql){
    echo "Added to Cart";
    }
    else {
    echo "Failed";
    }
  }
  ?>
