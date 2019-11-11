<?php
$mysqli = new mysqli("localhost", "root", "", "music_shop");


function checklogin() {
	session_start();
	if(!$_SESSION['email'])
	{
	header("Location: login");//redirect to login page to secure the welcome page without login access.
	}
}



function getIp() {
	$ip = $_SERVER['REMOTE_ADDR'];
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	return $ip;
}


function send_email($confirmation_code) {
	include('mail/index1.php');
	send_email1254("abhishekkumarjnvk@gmail.com","1215");

}

function sign_up($username,$email,$password) {
	global $mysqli;
	$encrypted_password= md5($password);
	$insert_notice = "INSERT INTO userss (username,email,password) values ('$username','$email','$encrypted_password')";
     $finally_update = mysqli_query($mysqli, $insert_notice);
     if($finally_update){
     return 1;
	}
	else {
		return 0;
		}
}


function login_user($email,$password) {
	global $mysqli;
	$encrypted_password= md5($password);
    $check_user="select * from users WHERE email ='$email' AND password='$encrypted_password'";
    $run=mysqli_query($mysqli,$check_user);
    if(mysqli_num_rows($run))
    {
       return 1 ;
    }
    else
    {
      return 0;
    }
}



function check_email($email) {
	global $mysqli;
    $check_user="select * from users WHERE email ='$email'";
    $run=mysqli_query($mysqli,$check_user);
    if(mysqli_num_rows($run))
    {
       return 1 ;
    }
    else
    {
      return 0;
    }
}


function is_verified($email) {
	global $mysqli;
    $check_user="select * from users WHERE email ='$email' AND varification=1";
    $run=mysqli_query($mysqli,$check_user);
    if(mysqli_num_rows($run))
    {
       return 1 ;
    }

    else
    {
      return 0;
    }
}



function send_verification_code($email,$verification_code){
  global $mysqli;
  $encrypted_password= md5($password);
  $insert = "INSERT INTO users (email,code) values ('$email','$verification_code')";
     $finally_update = mysqli_query($mysqli, $insert);
     if($finally_update){
     return 1;
  }
  else {
    return 0;
    }
}

function fetch_current_user(){
  global $mysqli;
  $email = $_SESSION['email'];
  $query="SELECT * FROM `users` WHERE `email` = '$email'";

  $run_query = mysqli_query($mysqli,$query);
  $fetched_details= mysqli_fetch_array($run_query);
  return $fetched_details;
}

function cart_total(){
  global $mysqli;
  $currentUser= fetch_current_user();
  $email = $currentUser['email'];
  $sql="SELECT * FROM cart WHERE email ='$email'  ORDER BY id DESC";
  $result_set=mysqli_query($mysqli,$sql);
  $total=0;
  while($row=mysqli_fetch_assoc($result_set)){
    $total=$total+$row['price'];
  }
  return $total;

}

?>
