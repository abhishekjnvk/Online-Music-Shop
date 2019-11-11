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
    <title><?php echo $currentUser['username']; ?> || Profile</title>
</head>

<body style="background: url('include/bg.jpg') repeat 0 0;">

    <?php  include('include/nav.php');?>
      <div class="container" >
    <div class="container">
        <center>
            <image src="https://icon-library.net/images/profile-png-icon/profile-png-icon-1.jpg" class="mt-5" width="100px">
                <p class="text-white mt-1" style="font-size:25px;"><?php echo $currentUser['username']; ?></p>
                <p class="text-white mt-1" style="font-size:25px;"><?php echo $currentUser['email']; ?></p>
        </center>
    </div>
    <div class="row">
<!-- start of favourite list -->
        <div class=" col-lg-5 col-md-6 col-sm-9 mx-auto border rounded mt-2" style="backdrop-filter: url(filters.svg#filter) blur(8px) saturate(150%);">
            <center>
                <h1 class="bg-primary text-white mt-2 p-2 rounded"><b>Saved songs</b></h1>
                <button class="btn btn-secondary border border-secondary mx-auto" id="clear_fav_list">Clear list</button>
            </center>
            <?php
              $email = $currentUser['email'];
               $sql="SELECT * FROM fav_songs WHERE email ='$email'  ORDER BY sl DESC LIMIT 15";
              $result_set=mysqli_query($mysqli,$sql);
             while($row=mysqli_fetch_assoc($result_set)){
          ?>
            <div class="border border-primary mx-auto mt-3" style=" padding:10px;">
                <center>
                        <div class="col-lg-12">
                            <img src="<?php echo $row['albumPic']; ?>" height="100px">
                        </div>
                        <div class="col-lg-12">
                            <p class="mt-2 text-white" style="font-family:vardana; font-size:22px"><b><?php echo $row['songName']; ?></b></p>
                            <p class="mt-2 text-white"><?php echo $row['artist']; ?></p>
                            <p class="mt-2 text-secondary" id="url_song"><?php echo $row['url']; ?></p>
                            <p class="mt-2 text-secondary"><button class="btn btn-primary" id="remove_fav">💔</button></p>
                        </div>
                </center>
            </div>
            <?php } ?>
        </div>
<!-- end of favourite list -->
<!-- start of history -->
        <div class=" col-lg-5 col-md-6 col-sm-9 mx-3 border mx-auto rounded mt-2" style="backdrop-filter: url(filters.svg#filter) blur(8px) saturate(150%);">
            <center>
                <h1 class="bg-primary text-white mt-2 p-2 rounded"><b>Last Played</b></h1>
                <button class="btn btn-secondary border border-secondary mx-auto" id="delete_history">Delete History</button>
            </center>

            <?php
                  $email = $currentUser['email'];
                   $sql="SELECT * FROM last_played WHERE email ='$email'  ORDER BY sl DESC";
                  $result_set=mysqli_query($mysqli,$sql);
                 while($row=mysqli_fetch_assoc($result_set)){
              ?>
            <div class="border border-primary mx-auto mt-2" style="backdrop-filter: url(filters.svg#filter) blur(25px) saturate(150%);" id="history_div">
                <center>
                    <div class="">
                        <p class="mt-1 text-white" style="font-family:vardana; font-size:22px"><b><?php echo $row['songName']; ?></b></p>
                        <p class="text-white"><?php echo $row['artist']; ?></p>
                        <p class="text-warning"><?php echo $row['time']; ?></p>
                    </div>
                </center>
            </div>
            <?php } ?>
        </div>
<!-- end of history -->

    </div>

    <div class="text-center mb-3 mt-5 text-white">
        <p id="loggd_in_email"><?php echo $_SESSION['email']; ?></p>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/plyr/3.5.6/plyr.min.js'></script>
    <script src="include/profile.js"></script>

</body>

</html>
