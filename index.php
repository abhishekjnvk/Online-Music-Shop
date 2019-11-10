<?php
include('include/functions/function.php');      //including file of functions
checklogin();     //function to check weather user is logged in or not
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href='https://cdn.plyr.io/3.5.6/plyr.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Home</title>
</head>

<body style="background: url('include/bg2.jpg') repeat 0 0;">
    <?php  include('include/nav.php');?>

    <!--including top navigation file -->
    <div class="container bg-dark">
        <div class="container bg-primary">
            <div class="column add-bottom">

                <div id="mainwrap">
                    <div id="nowPlay">
                        <div style="height:300px;">
                            <center>
                                <img src="" class="mt-2 mx-auto col-lg-5" alt="Album Picture" id="album_picture"><br> <!--  Album picture goes here   -->
                                <span id="npAction">Paused...</span>

                            </center>
                        </div>


                        <center>
                            <span id="npTitle"></span><br> <!--  Title of the song  -->
                            <span id="npArtist"></span><!--  Artist of the song goes here   -->
                        </center>

                    </div>

                    <div id="audiowrap" class="mt-3">
                        <!-- Audio player -->
                        <div id="audio0">
                            <audio id="audio1" preload controls>Your browser does not support HTML5 Audio! 😢</audio> <!--  Text to displayed if browder doesnot support audio   -->
                        </div>

                        <!-- control button starts-->
                        <div id="tracks" class="mt-3 col-lg-12">
                            <a id="btnPrev"><button class="btn btn-warning border border-secondary mx-auto"><span style='font-size:40px;'>&#8592;</span></button></a>
                            <a id="add_fav"><button class="btn btn-warning border border-secondary mx-auto" type="submit"><span style='font-size:40px;'>❤</span></button></a>
                            <a id="btnNext"><button class="btn btn-warning border border-secondary ml-2 mx-auto"><span style='font-size:40px;'>&#8594;</span></button></a>
                        </div>
                        <!-- control button Ends -->

                    </div>

                    <!-- Start of Song List-->
                    <div id="plwrap" class="mt-5 border">
                            <ul id="plList" style="list-style-type:none;"></ul>
                    </div>
                    <!-- End of song list -->


                </div>
            </div>
            <div class="center mb-3">
                <p id="loggd_in_email"><?php echo $_SESSION['email']; ?></p>
            </div>
        </div>

    </div>



    <script src="./script.js"></script>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/plyr/3.5.6/plyr.min.js'></script>
</body>

</html>
