<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<!DOCTYPE html>
<html class="text-dark" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>videostream</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <style>
h1 {text-align: center;}
p {text-align: center;}

</style>
</head>

<body class="text-dark" style="background: rgb(0,0,0);">
    <main class="page">
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading" style="margin-top: 45px;">
                    <h2 class="text-info" style="font-weight: bold;"></h2>
                    <p style="color: rgb(255,255,255);"></p>
                </div>
                <nav class="navbar navbar-expand-md py-3" style="background: black;">
                    <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span style="font-weight: bold;color: rgba(255,255,255,0.9);background: #000000;">Streamio</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-3"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navcol-3" style="background: #000000;color: rgb(255,255,255);">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item"><a class="nav-link active" href="#" style="color: rgba(255,255,255,0.9);">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" style="color: rgb(255,255,255);">Trending</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" style="color: rgb(255,255,255);">Popular</a></li>
                            </ul><a href="logout.php"><button class="btn btn-primary" type="button" style="background: #1a1aff;">Logout</button></a>
                        </div>
                    </div>
                </nav>
                <br><br>

                    <h1 style="color:white;text-align::center;">Hey, <?php echo $_SESSION['username']; ?>!</h1>
                   </center><br><br>
                <h1 style="margin-bottom: 25px;color: rgb(255,255,255);">Trending</h1>
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-6 col-lg-4" style="border-style: none;">
                        <div class="card clean-card text-center"><img src="https://i.ytimg.com/vi/dJ32LuLIKc8/maxresdefault.jpg" style="height: 200px;"></img>
                            <div class="card-body info" style="background: #000000;">
                            <a href="vidplayer1.php"><u><h4 class="card-title" style="color: rgb(255,255,255);">VIKING - Official HD Trailer | English Movie Release (2019)</h4></u></a>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4" style="border-style: none;">
                        <div class="card clean-card text-center"><img src="https://i.ytimg.com/vi/SQ96f_ZrQ48/maxresdefault.jpg" style="height: 200px;"></img>
                            <div class="card-body info" style="background: #000000;color: rgb(255,255,255);border-color: rgb(0,0,0);">
                            <a href="vidplayer2.php"><u><h4 class="card-title" style="color: rgb(255,255,255);">The Tomorrow War - Official Trailer (English) | Amazon Prime Video</h4></u></a>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4" style="border-style: none;">
                        <div class="card clean-card text-center"><img src="https://i.ytimg.com/vi/6gVAIx7OeyI/maxresdefault.jpg" style="height: 200px;"></img>
                            <div class="card-body info" style="color: rgb(255,255,255);background: #000000;border-color: rgb(0,0,0);">
                            <a href="vidplayer3.php"><u><h4 class="card-title" style="color: rgb(255,255,255);">The Platform | Main Trailer | Netflix</h4></u></a>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><br><br>
        <section class="clean-block about-us">
            <div class="container">
                <h1 style="margin-bottom: 25px;color: rgb(255,255,255);">Most Popular</h1>
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-6 col-lg-4" style="border-style: none;">
                        <div class="card clean-card text-center"><img src=" https://i.ytimg.com/vi/foyufD52aog/hqdefault.jpg " style="height: 200px;"></img>
                            <div class="card-body info" style="background: #0d0d0d;border-color: rgb(0,0,0);">
                            <a href="vidplayer4.php"><u><h4 class="card-title" style="background: #000000;color: rgb(255,255,255);">Disney's Aladdin Official Trailer - In Theaters May 24!</h4></u></a>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4" style="border-color: none;">
                        <div class="card clean-card text-center"><img src=" https://sgdccdnems02.cdnsrv.jio.com/c.saavncdn.com/828/I-Believe-From-the-Pan-Movie-Trailer-English-2015-500x500.jpg " style="height: 200px;"></img>
                            <div class="card-body info" style="color: rgb(255,255,255);background: #000000;border-color: rgb(0,0,0);">
                            <a href="vidplayer5.php"><u><h4 class="card-title" style="background: #000000;color: rgb(255,255,255);">I Believe (From The "Pan" Movie Trailer)</h4></u></a>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4" style="border-style: none;">
                        <div class="card clean-card text-center"><img src="https://i.ytimg.com/vi/vz-gdEL_ae8/maxresdefault.jpg " style="height: 200px;"></img>
                            <div class="card-body info" style="background: #000000;">
                            <a href="vidplayer6.php"><u><h4 class="card-title" style="background: #000000;color: rgb(255,255,255);">Greenland | Official Trailer [HD] | On Demand Everywhere December 18th</h4></u></a>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html> 