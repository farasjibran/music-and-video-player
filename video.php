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
                    <a class="nav-link text-white" href="#"><b>Video</b></a>
                </li>
            </ul>
        </div>
        <img src="asset/image/logoputih.png" width="3%" style="margin-right: 20px;">
    </nav>

    <!-- kontent -->
    <div class="container">
        <h1 style="position: absolute; font-size: 150px; margin-left: 60px; margin-top: 20px; text-shadow: 0px 10px #929292;" class="text-white"><b>VIDEO</b> PLAYER</h1>
    </div>

    <!-- header -->
    <div class="row" style="margin-left: 3%; margin-top: 22%; margin-bottom: -22%;">
        <div class="col" style="margin-right: -55%;">
            <h4>Check <b>Out</b> Some Video</h4>
        </div>
        <div class="col">
            <img width="90" src="asset/image/accs.png">
        </div>
    </div>

    <!-- list video -->
    <div class="container cardv">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://i.ytimg.com/an_webp/X_b-wNkz4DU/mqdefault_6s.webp?du=3000&sqp=CMOhnvkF&rs=AOn4CLAyPd2_ZYO_lWaKxqmDQro04C8jPA" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dilan 1990</h5>
                        <p class="card-text">Milea meets with Dilan at a high school in Bandung. That was 1990,
                            when Milea moved from Jakarta to Bandung...</p>
                        <a href="vid1.php" class="btn btn-primary">Show The Video</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://i.ytimg.com/an_webp/nwhB2Hb7g5c/mqdefault_6s.webp?du=3000&sqp=COyonvkF&rs=AOn4CLAVZTJkkFl6CjpSLlxI8Hv7w3yUBQ" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dilan 1991</h5>
                        <p class="card-text">Dilan dan Milea telah resmi berpacaran.
                            Ditengah kebahagiaan mereka berdua, Dilan terancam dipecat...</p>
                        <a href="vid2.php" class="btn btn-primary">Show The Video</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://i.ytimg.com/an_webp/C2yFJaXmdQs/mqdefault_6s.webp?du=3000&sqp=CIiGnvkF&rs=AOn4CLATKzSFijZ_PXokNs-HJgBXLiAUiA" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Milea : Suara Dari Dilan</h5>
                        <p class="card-text">Tidak ada kisah yang lebih Indah dari kisah cinta di SMA. Sama halnya dengan kisah cinta Dilan dan Milea...</p>
                        <a href="vid3.php" class="btn btn-primary">Show The Video</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="container footer" style="text-align: center; margin-top: 5%;">
        <p>Copyright @ 2020</p>
    </div>
</body>

</html>