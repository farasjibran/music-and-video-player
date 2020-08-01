<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Video</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- my css -->
    <link rel="stylesheet" href="asset/style/style.css">

    <!-- css -->
    <style>
        .audiolist {
            margin-top: 22%;
        }
    </style>
</head>

<body>

    <!-- navbar -->
    <img src="asset/image/imgnav.png" style="position: absolute;" width="100%">
    <nav class="navbar navbar-expand-lg navbar-light nav">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item" style="margin-right: 30px; margin-left: 20px;">
                    <a class="nav-link text-white" href="index.php">Home</a>
                </li>
                <li class="nav-item active" style="margin-right: 30px;">
                    <a class="nav-link text-white" href="#"><b>Music</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="video.php">Video</a>
                </li>
            </ul>
        </div>
        <img src="asset/image/logoputih.png" width="3%" style="margin-right: 20px;">
    </nav>

    <!-- kontent -->
    <div class="container">
        <h1 style="position: absolute; font-size: 150px; margin-left: 50px; margin-top: 20px; text-shadow: 0px 10px #929292;" class="text-white"><b>MUSIC</b> PLAYER</h1>
    </div>

    <!-- isi -->
    <div class="container audiolist">
        <!-- header -->
        <div class="row" style="margin-left: -15%; margin-bottom: 5%;">
            <div class="col" style="margin-right: -50%;">
                <h4>Check <b>Out</b> Some Music</h4>
            </div>
            <div class="col">
                <img width="90" src="asset/image/accs.png">
            </div>
        </div>
        <!-- music -->
        <div class="row">
            <div class="col" style="margin-right: 50px; margin-left: -10%;">
                <p style="margin-left: 20px;">Amine : REEL IT IN</p>
                <audio controls preload="none" style="width: 100%;">
                    <source src="asset/audio/reelitin.mp3">
                </audio>
            </div>
            <div class="col" style="margin-right: -5%;">
                <p style="margin-left: 20px;">88GLAM : LIL BOAT</p>
                <audio controls preload="none" style="width: 100%;">
                    <source src="asset/audio/lilboat.mp3">
                </audio>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col" style="margin-right: 50px; margin-left: -10%;">
                <p style="margin-left: 20px;">Ardhito Pramono : Fake Optics</p>
                <audio controls preload="none" style="width: 100%;">
                    <source src="asset/audio/fakeoptics.mp3">
                </audio>
            </div>
            <div class="col" style="margin-right: -5%;">
                <p style="margin-left: 20px;">Ardhito Pramono : Fine Today</p>
                <audio controls preload="none" style="width: 100%;">
                    <source src="asset/audio/finetoday.mp3">
                </audio>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="container footer" style="text-align: center; margin-top: 5%;">
        <p>Copyright @ 2020</p>
    </div>

</body>

</html>