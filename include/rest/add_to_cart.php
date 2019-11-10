<?php
error_reporting(0);
  $artist=$_GET['artist'];
  $songName=$_GET['songName'];
  $coverImage=$_GET['coverImage'];
  $url=$_GET['url'];
  $email=$_GET['email'];
  $price="10";
  $conn = new mysqli("localhost", "root", "", "music_shop");
  $check_already_added="select * from cart WHERE email='$email' AND url='$url'";
  $run=mysqli_query($conn,$check_already_added);
  if(mysqli_num_rows($run)>0){
    echo "Already In cart";
  }
  else {
    $sql= mysqli_query($conn,"INSERT INTO cart(songName,artist,price,coverimage,email,url) VALUES('".$songName."','".$artist."','".$price."','".$coverImage."','".$email."','".$url."')");
    if($sql){
    echo "Added to Cart";
    }
    else {
    echo "Failed";
    }
  }
  ?>
