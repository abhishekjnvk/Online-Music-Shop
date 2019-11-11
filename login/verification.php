<?php
// error_reporting(0);
include('../include/functions/function.php');
// echo send_verification_code("abhishekkumarjnvk@gmail.com","123456","123456");
$token=$_GET['token'];
$email=$_GET['email'];
$code=$_GET['code'];
$result=verify_email($email,$token,$code);
if($result==1)
{
  echo "Email verified <a href='index.php'> please Login</a>";
}

if($result==0)
{
  echo "Email verification faild";
}

 ?>
