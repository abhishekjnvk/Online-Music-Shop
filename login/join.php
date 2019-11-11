<?php
session_start();//session starts here

?>
<html>

<head>
    <title>
        Online Music Shop
    </title>
    <?php      include ('../include/style.php'); ?>
    <!-- Custom styles for this template -->
    <link href="../include/css/floating-labels.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body style="background: url('../include/bg.jpg') repeat 0 0;">
    <form class="form-signin" method="post" action="join.php">
        <div class="text-center mb-4">
            <center>
                <img class="mb-4" src="../include/logo.png" alt="" width="72" height="72">
                <h2 class="h3 mb-3 font-weight-normal text-white">Signup Here</h2>
            </center>
        </div>
        <div class="form-label-group">
            <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required autofocus>
            <label for="inputEmail">Email</label>
        </div>

        <div class="form-label-group">
            <input type="text" id="username" class="form-control" placeholder="Full Name" name="username" required>
            <label for="username">Full Name</label>
        </div>
        <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass2" required minlength="4">
            <label for="inputPassword">Password</label>
        </div>
        <div class="form-label-group">
            <input type="password" id="inputPassword2" class="form-control" placeholder="Confirm Password" name="pass" required minlength="4">
            <label for="inputPassword2">Confirm Password</label>
        </div>
        <button class="btn btn-lg btn-primar" id="login" type="submit" name="join">sign Up</button>
        <p class="mt-3 text-center"><a href="index.php" class="text-white">Back to Login</a></p>
        <!-- <p class="mt-5 mb-3 text-muted text-center">&copy; abhishek</p> -->
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

<?php
include('../include/functions/function.php');
if(isset($_POST['join']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];
    $user_pass2=$_POST['pass2'];
    $username=$_POST['username'];
    if ($user_pass!=$user_pass2) {
        echo "<script>alert('Please match your Password')</script>";
    }
    else{
        $check_email= check_email($user_email);
        if($check_email==0)
        {
            sign_up($username,$user_email,$user_pass);
            $response =send_verification_code($user_email);
            if($response == 1){
                 echo "<script>alert('Please check your email and activate your account\it may take some time')</script>";
            }

        if ($response == 0){
          echo "<script>alert('Something went wrong! Please try again')</script>";
        }
}
if ($check_email>0) {
                 echo "<script>alert('Email Already registered')</script>";
}


 }
}
?>
