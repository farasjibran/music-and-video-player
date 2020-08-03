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
        .cardv {
            margin-top: 25%;
            margin-bottom: 5%;
            margin-left: 15%;
        }

        .vidplay {
            margin-left: 17%;
            margin-top: 22%;
        }
    </style>
</head>

<body style="overflow-x: hidden;">

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
                    <a class="nav-link text-white" href="music.php">Music</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="video.php"><b>Video</b></a>
                </li>
            </ul>
        </div>
        <img src="asset/image/logoputih.png" width="3%" style="margin-right: 20px;">
    </nav>

    <!-- kontent -->
    <div class="container">
        <h1 style="position: absolute; font-size: 150px; margin-left: 60px; margin-top: 20px; text-shadow: 0px 10px #929292;" class="text-white"><b>VIDEO</b> PLAYER</h1>
    </div>

    <div class="container vidplay">
        <h1 style="margin-bottom: 40px;"><b>Milea : Suara Dari Dilan</b></h1>
        <video autoplay controls width="1000">
            <source src="asset/video/milea.mp4" type="video/mp4">
        </video>
    </div>

    <!-- footer -->
    <div class="container footer" style="text-align: center; margin-top: 5%;">
        <p>Copyright @ 2020</p>
    </div>
</body>

</html>