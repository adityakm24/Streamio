<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>vidplayer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/Dynamically-Queue-Videos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<style>
    h1,
    p {
        color: white;
        margin: 70px;
    }

    iframe {
        border: 1px solid #4CAF50;
        margin: 70px;
    }

    .card {
        background-color: #1a1aff;
    }

    .card-title {
        color: white;
    }
</style>

<body style="background: rgb(0,0,0);">
    <div class="container-fluid" id="dqv">
        <nav class="navbar navbar-light navbar-expand-md py-3" style="background: black;border-color: rgb(0,0,0);--bs-light: #ffffff;--bs-light-rgb: 255,255,255;">
            <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span style="font-weight: bold;color: rgba(255,255,255,0.9);background: #000000;">Streamio</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-3"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-3" style="background: #000000;color: rgb(255,255,255);">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link active" href="dashboard.php" style="color: rgba(255,255,255,0.9);">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="dashboard.php" style="color: rgb(255,255,255);">Trending</a></li>
                        <li class="nav-item"><a class="nav-link" href="dashboard.php" style="color: rgb(255,255,255);">Popular</a></li>
                    </ul><a href="logout.php"><button class="btn btn-primary" type="button" style="background: #1a1aff;">Logout</button></a>
                </div>
            </div>
        </nav>
        <div>
            <h1 style="background: #000000;color: rgb(255,255,255);">Greenland | Official Trailer [HD] | On Demand Everywhere December 18th</h1>

            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/vz-gdEL_ae8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width:70%; height:500px;"></iframe>

            <p>IMDB: 5.1/10<br>Rotten Tomatoes: 78%<br>Metacritic: 64%</p>
            <p>A family fights for survival as a planet-killing comet races to Earth. John Garrity (Gerard Butler), his estranged wife Allison (Morena Baccarin), and young son Nathan make a perilous journey to their only hope for sanctuary. Amid terrifying news accounts of cities around the world being leveled by the comet’s fragments, the Garrity’s experience the best and worst in humanity while they battle the increasing panic and lawlessness surrounding them. As the countdown to global apocalypse approaches zero, their incredible trek culminates in a desperate and last-minute flight to a possible safe haven.
            </p>

        </div>
        <!-- Carousel wrapper -->
        <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
            <!-- Controls -->
            <div class="d-flex justify-content-center mb-4">
                <button class="carousel-control-prev position-relative" type="button" data-mdb-target="#carouselMultiItemExample" data-mdb-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="">
                        < Previous</span>
                </button>
                <button class="carousel-control-next position-relative" type="button" data-mdb-target="#carouselMultiItemExample" data-mdb-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="">Next ></span>
                </button>
            </div>
            <!-- Inner -->
            <div class="carousel-inner py-4">
                <!-- Single item -->
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <img src="   https://i.ytimg.com/vi/x6rLjCrA5QQ/maxresdefault.jpg" class="card-img-top" alt="Vikking Season 2 trailer " />
                                    <div class="card-body">
                                        <h5 class="card-title">Vikking Season 2 trailer</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://resizing.flixster.com/H8OJj1_TU4nBdZLi14xWwndZuyQ=/ems.ZW1zLXByZC1hc3NldHMvdHZzZWFzb24vUlRSVFRWMTIyOS53ZWJw" class="card-img-top" alt="Vikings Final Season" height=235px />
                                    <div class="card-body">
                                        <h5 class="card-title"> Vikings Final Season</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://m.media-amazon.com/images/M/MV5BZDlkNjA2ZTgtZmZkOC00OTIwLWIzZWQtMDNlMzA5MzYxNWI2XkEyXkFqcGdeQXRyYW5zY29kZS13b3JrZmxvdw@@._V1_FMjpg_UX1000_.jpg" class="card-img-top" alt="Vikings: Season 1 (Alternate Trailer)" height=235px />
                                    <div class="card-body">
                                        <h5 class="card-title">Vikings: Season 1 (Alternate Trailer)</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="card">
                                    <img src="https://i.ytimg.com/vi/VuwboLzEM-0/maxresdefault.jpg" class="card-img-top" alt="1920" />
                                    <div class="card-body">
                                        <h5 class="card-title">1920</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://www.cityofcamas.us/sites/default/files/imageattachments/parksrec/page/19771/onward2.jpeg" class="card-img-top" alt="Onwards" />
                                    <div class="card-body">
                                        <h5 class="card-title">Onwards</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://static1.colliderimages.com/wordpress/wp-content/uploads/2021/05/lucifer-s6.jpg?q=50&fit=contain&w=943&h=472&dpr=1.5" class="card-img-top" alt="Lucifer" height=235px />
                                    <div class="card-body">
                                        <h5 class="card-title">Lucifer</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/187.webp" class="card-img-top" alt="Peaks Against the Starry Sky" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/188.webp" class="card-img-top" alt="Bridge Over Water" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/189.webp" class="card-img-top" alt="Purbeck Heritage Coast" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Inner -->
        </div>
        <!-- Carousel wrapper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/Dynamically-Queue-Videos.js"></script>
        <script src="https://www.youtube.com/iframe_api"></script>
        <!-- MDB -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"></script>
</body>

</html>