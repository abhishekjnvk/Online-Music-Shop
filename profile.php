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



<div class="row">
    <div class=" col-lg-3 col-md-6 col-sm-9 mx-3">
        <center>
            <h1 class="text-secondary mt-5"><b>Last Played</b></h1>
        </center>
        <?php
          $email = $currentUser['email'];
           $sql="SELECT * FROM last_played WHERE email ='$email'  ORDER BY sl DESC";
          $result_set=mysqli_query($mysqli,$sql);
         while($row=mysqli_fetch_assoc($result_set)){
      ?>
        <div class="border border-primary mx-auto mt-3" style="
          padding:10px;/* URL to SVG filter */
backdrop-filter: url(commonfilters.svg#filter);
/* <filter-function> values */
/* backdrop-filter: blur(2px);
/* backdrop-filter: brightness(60%); */
/* backdrop-filter: contrast(40%); */
/* backdrop-filter: drop-shadow(4px 4px 10px blue); */
/* backdrop-filter: grayscale(30%); */
/* backdrop-filter: hue-rotate(120deg); */
/* backdrop-filter: invert(70%); */
/* backdrop-filter: opacity(20%); */
/* backdrop-filter: sepia(90%); */
/* backdrop-filter: saturate(80%);  */
/* Multiple filters */
backdrop-filter: url(filters.svg#filter) blur(4px) saturate(150%);">
            <center>
                    <div class="">
                        <p class="mt-2 text-white" style="font-family:vardana; font-size:22px"><b><?php echo $row['songName']; ?></b></p>
                        <p class="mt-2 text-warning"><?php echo $row['artist']; ?></p>
                    </div>
            </center>
        </div>
    <?php } ?>
    </div>






    <div class=" col-lg-4 col-md-6 col-sm-9">
        <center>
            <h1 class="text-secondary mt-5"><b>Favourite songs</b></h1>
        </center>
        <?php
          $email = $currentUser['email'];
           $sql="SELECT * FROM fav_songs WHERE email ='$email'  ORDER BY sl DESC";
          $result_set=mysqli_query($mysqli,$sql);
         while($row=mysqli_fetch_assoc($result_set)){
      ?>
        <div class="border border-primary mx-auto mt-3" style=" padding:10px;">
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
    </div>

</div>

</body>
</html>
