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
h1 {
  margin: 70px;
}
iframe {
    border: 1px solid #4CAF50;
    margin: 70px;
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
        <h1 style="background: #000000;color: rgb(255,255,255);">Vikings Season 1 Trailer</h1>
        
        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/9GgxinPwAGc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width:70%; height:500px;"></iframe>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Dynamically-Queue-Videos.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
</body>

</html>