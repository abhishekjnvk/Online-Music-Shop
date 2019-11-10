<?php
include('include/functions/function.php');      //including file of functions
checklogin();     //function to check weather user is logged in or not
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Home</title>
</head>

<body style="background: url('include/bg2.jpg') repeat 0 0;">

    <?php  include('include/nav.php');
    $currentUser= fetch_current_user();?>
    <div class="container">
        <center>
            <image src="https://icon-library.net/images/profile-png-icon/profile-png-icon-1.jpg" class="mt-5" width="100px">
                <p class="text-white mt-1" style="font-size:25px;"><?php echo $currentUser['username']; ?></p>
                <p class="text-white mt-1" style="font-size:25px;"><?php echo $currentUser['email']; ?></p>
        </center>
    </div>
    <center>
        <h1 class="text-secondary mt-5"><b>Favourite songs</b></h1>
    </center>


    <?php
      $email = $currentUser['email'];
       $sql="SELECT * FROM fav_songs WHERE email ='$email'  ORDER BY sl DESC";
      $result_set=mysqli_query($mysqli,$sql);
     while($row=mysqli_fetch_assoc($result_set)){
  ?>

    <div class="border border-primary col-lg-4 mx-auto col-md-6 col-sm-9 mt-3" style=" padding:10px;">
        <center>
            <div class="row">
                <div class="col-lg-4">
                    <img src="<?php echo $row['albumPic']; ?>" height="100px">

                </div>
                <div class="col-lg-8">
                    <p class="mt-2 text-white" style="font-family:vardana; font-size:22px"><b><?php echo $row['songName']; ?></b></p>
                    <p class="mt-2 text-warning"><?php echo $row['artist']; ?></p>
                    <p class="mt-2 text-secondary"><button class="btn btn-primary">💔</button></p>
                </div>
            </div>
        </center>
    </div>
<?php } ?>


</body>
</html>
