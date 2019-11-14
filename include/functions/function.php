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
	$insert_notice = "INSERT INTO users (username,email,password) values ('$username','$email','$password')";
	$finally_update = mysqli_query($mysqli, $insert_notice);
	if($finally_update){
	return 1;
	$insert_notice = "INSERT INTO users (username,email,password) values ('$username','$email','$password')";
     $finally_update = mysqli_query($mysqli, $insert_notice);
     if($finally_update){
     return 1;
	}
	else {
		return 0;
		}
}
}

function login_user($email,$password) {
	global $mysqli;
    $check_user="select * from users WHERE email ='$email' AND password='$password'";
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

function send_verification_code($email){
	$token=rand(2222,9999);
	$code=rand(100000,999999);
	insert_token($email,$token,$code);
	$to = $email;
	$subject = 'please confirm your account';
	$from = 'abhishekkumarvidarthi@gmail.com';
	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Create email headers
	$headers .= 'From: '.$from."\r\n".
	'Reply-To: '.$from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	$button_email="http://frwd.tk/login/verification.php?token=$token&email=$email&code=$code";
	// Compose a simple HTML email message
	$message = '<html><body>';
	$message .= '<h1 style="color:#f40;">Hello User please click on the the link to activate your account!</h1>';
	$message .= $button_email;
	$message .= '</body></html>';
	// Sending email
	if(mail($to, $subject, $message, $headers)){
	 	return 1;
	}
	else{
		return 0;
	}
}


function send_reset_code($email){
	global $mysqli;

  $query="SELECT * FROM `users` WHERE `email` = '$email'";
  $run_query = mysqli_query($mysqli,$query);
  $fetched_details= mysqli_fetch_array($run_query);
  $password = $fetched_details['password'];
	$token=rand(2222,9999);
	$code=rand(100000,999999);
	insert_token($email,$token,$code);
	$to = $email;
	$subject = 'your Password';
	$from = 'abhishekkumarvidarthi@gmail.com';
	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Create email headers
	$headers .= 'From: '.$from."\r\n".
	'Reply-To: '.$from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	// Compose a simple HTML email message
	$message = '<html><body>';
	$message .= '<h1 style="color:#f40;">Hello User you asked for Password</h1> your password is: ';
	$message .= $password;
	$message .= '</body></html>';

	// Sending email
	if(mail($to, $subject, $message, $headers)){
	 	return 1;
	}
	else{
		return 0;
	}
}

function insert_token($email,$token,$code){
	global $mysqli;
	$sql= mysqli_query($mysqli,"INSERT INTO verification(email,token,code) VALUES('".$email."','".$token."','".$code."')");
}
function verify_email($email,$token,$code){
	global $mysqli;
		$check_user="select * from verification WHERE email ='$email' AND token='$token' AND code='$code'";
		$run=mysqli_query($mysqli,$check_user);
		if(mysqli_num_rows($run))
			{
				$update_data="UPDATE users SET varification = 1 WHERE email = '$email'";
				mysqli_query($mysqli,$update_data);
				return 1;
			}
		else {
			return 0;
		}
}
?>
