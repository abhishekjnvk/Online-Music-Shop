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
    <form class="form-signin" method="post" action="index.php">
        <div class="text-center mb-4">
            <center>
                <img class="mb-4" src="../include/logo.png" alt="" width="72" height="72">
                <h2 class="h3 mb-3 font-weight-normal text-white">Please Login</h2>
            </center>
        </div>
        <div class="form-label-group">
            <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="email" required autofocus>
            <label for="inputEmail">Username</label>
        </div>

        <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required>
            <label for="inputPassword">Password</label>
        </div>
        <button class="btn btn-lg btn-primar" id="login" type="submit" name="login">Sign in</button>
        <p class="mt-5 "><a href="reset.php" class="text-warning">Forgot Password</a> <a href="join.php" class="float-right text-warning">Sign up</a></p>
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
if(isset($_POST['login']))  
{
    $user_email=$_POST['email'];  
    $user_pass=$_POST['pass'];
    $check_email=check_email($user_email);
    $is_verified=is_verified($user_email);
    if ($check_email>0 && $is_verified==1) {
            $response = login_user($user_email,$user_pass);
            if($response == 1){
               echo "<script>window.open('../index.php','_self')</script>";  
                $_SESSION['email']=$user_email;
            }
            if ($response == 0){
              echo "<script>alert('Email or password is incorrect!')</script>";
            }   
     }

     if ($check_email==0) {
          echo "<script>alert('Email is not registered')</script>";
     }
     if ($is_verified==0) {
          echo "<script>alert('Please verify your email')</script>";
     }



}  
?>
