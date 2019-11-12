<?php
include('include/functions/function.php');      //including file of functions
checklogin();     //function to check weather user is logged in or not
$currentUser= fetch_current_user();
?>
<!doctype html>
<html lang="en">
<?php //error_reporting(0); ?>

<head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title><?php echo $currentUser['username']; ?> || Cart</title>
</head>

<body style="background: url('include/bg2.jpg') repeat 0 0;">

    <?php  include('include/nav.php');?>
      <div class="container">
    <div class="container">
        <center>
            <image src="https://icon-library.net/images/profile-png-icon/profile-png-icon-1.jpg" class="mt-5" width="100px">
                <p class="text-white mt-1" style="font-size:25px;"><?php echo $currentUser['username']; ?></p>
                <p class="text-white mt-1" style="font-size:25px;"><?php echo $currentUser['email']; ?></p>
        </center>
    </div>
<!-- start of cart -->
        <div class=" mx-auto col-md-6 col-sm-9 border rounded mt-2" style="backdrop-filter: url(filters.svg#filter) blur(8px) saturate(150%);">
            <center>
                <h1 class="bg-primary text-white mt-2 p-2 rounded"><b>Cart</b></h1>
                <p class="text-warning" style="font-size-45px;"><b>Total Amount: <?php echo cart_total(); ?></b></p>
                <button class="btn btn-secondary border border-secondary mx-auto" id="empty_cart">Empty cart</button>
                <a href="payment.php"><button class="btn btn-warning border border-success mx-auto" id="proceed_to_checkout">Proceed to checkout</button></a>
                <button class="btn btn-primary border border-success mx-auto mb-5" id="nothing_in_cart" disabled>Nothing in cart</button>
            </center>
            <?php
                    $email = $currentUser['email'];
                   $sql3="SELECT * FROM cart WHERE email ='$email'  ORDER BY id DESC";
                  $result_set3=mysqli_query($mysqli,$sql3);
                 while($row3=mysqli_fetch_assoc($result_set3)){
              ?>
            <div class="border border-primary mx-auto mt-3 mb-3" style=" padding:10px;">
                <center>
                        <div class="col-lg-12">
                            <img src="<?php echo $row3['coverimage']; ?>" height="100px">
                        </div>
                        <div class="col-lg-12">
                            <p class="mt-2 text-white" style="font-family:vardana; font-size:22px"><b><?php echo $row3['songName']; ?></b></p>
                            <p class="mt-2 text-white"><?php echo $row3['artist']; ?></p>
                            <p class="text-warning">₹ 10</p>
                        </div>
                </center>
            </div>
            <?php
    } ?>
  </div>
<!-- end of cart -->
    <div class="text-center mb-3 mt-5 text-white">
        <p id="loggd_in_email"><?php echo $_SESSION['email']; ?></p>
    </div>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/plyr/3.5.6/plyr.min.js'></script>
    <script src="include/profile.js"></script>
</body>

</html>



<script src="include/profile.js"></script>
<!-- Hide proceed to checkout button when cart is empty -->
<?php if (cart_total()==0) {  ?>
  <script>
$("#proceed_to_checkout").hide();
$("#empty_cart").hide();
  </script>
<?php }
if (cart_total()!=0) {  ?>
  <script>
  $("#nothing_in_cart").hide();
</script>
<?php }
 ?>
