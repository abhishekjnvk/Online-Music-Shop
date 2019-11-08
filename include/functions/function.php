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

?>