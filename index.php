<?php    include('include/functions/function.php');
    // include('include/functions/mail/index1.php');
checklogin();
// $response = sign_up("abhi","admin@admin.com","admin");

echo "<script>alert(response)</script>";

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://cdn.plyr.io/3.5.6/plyr.css'><link rel="stylesheet" href="./style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Home</title>
</head>

<body style="background: url('include/bg2.jpg') repeat 0 0;">
    <?php  include('include/nav.php');?>
        <div class="container bg-dark">

          <div class="container bg-primary">
            <div class="column add-bottom">
        <div id="mainwrap">
            <div id="nowPlay">
                <img src="" class="card-img-top mt-2" alt="Album Picture" id="album_picture"><br>
                <span id="npAction">Paused...</span><span id="npTitle"></span><br>
                <span id="npArtist">Abhishek Kumar</span>
            </div>
            <div id="audiowrap">
                <div id="audio0">
                    <audio id="audio1" preload controls>Your browser does not support HTML5 Audio! 😢</audio>
                </div>
                <div id="tracks">
                    <a id="btnPrev">&vltri;</a><a id="btnNext">&vrtri;</a>
                </div>
            </div>
            <div id="plwrap"><center>
                <ul id="plList"></ul>
                </center>
            </div>
        </div>
    </div>
    <div class="column add-bottom center">
        <p>&copy Abhishek</a></p>
    </div>
</div>

        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/html5media/1.1.8/html5media.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/plyr/3.5.6/plyr.min.js'></script><script  src="./script.js"></script>

</body>

</html>
