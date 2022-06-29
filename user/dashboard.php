<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<!DOCTYPE html>
<html class="text-dark" lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Streamio - Home</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
	<script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
	<style>
		/* CSS VARIABLES */
		:root {
			--primary: #141414;
			--light: #F3F3F3;
			--dark: #686868;
		}

		html,
		body {
			width: 100vw;
			min-height: 100vh;
			margin: 0;
			padding: 0;
			background-color: var(--primary);
			color: var(--light);
			scroll-behavior: smooth;
			font-family: Helvetica, sans-serif;
			box-sizing: border-box;
			line-height: 1.4;
		}

		@keyframes gradient {
			0% {
				background-position: 0% 50%;
			}

			50% {
				background-position: 100% 50%;
			}

			100% {
				background-position: 0% 50%;
			}
		}


		img {
			max-width: 100%;
		}

		h1 {
			padding-top: 60px;
		}

		.wrapper {
			margin: 0;
			padding: 0;
		}

		.menu-bar {
			border-radius: 25px;
			height: -webkit-fit-content;
			height: -moz-fit-content;
			height: fit-content;
			display: inline-flex;
			background-color: rgba(0, 0, 0, .4);
			-webkit-backdrop-filter: blur(10px);
			backdrop-filter: blur(10px);
			align-items: center;
			padding: 0 10px;
			margin: 50px 0 0 0;
			justify-content: center;
		}

		.menu-bar li {
			list-style: none;
			color: white;
			font-family: sans-serif;
			font-weight: bold;
			padding: 12px 16px;
			margin: 0 8px;
			position: relative;
			cursor: pointer;
			white-space: nowrap;
		}

		.menu-bar li::before {
			content: " ";
			position: absolute;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			z-index: -1;
			transition: .2s;
			border-radius: 25px;
		}

		.menu-bar li:hover {
			color: black;
		}

		.menu-bar li:hover::before {
			background: linear-gradient(to bottom, #e8edec, #ccc);
			box-shadow: 0px 3px 20px 0px black;
			-webkit-transform: scale(1.2);
			transform: scale(1.02);
		}

		#logo {
			color: #E50914;
			margin: 0;
			padding: 0;
		}

		/* MAIN CONTIANER */
		.main-container {
			padding: 50px;
		}

		.box {
			display: grid;
			grid-gap: 20px;
			border-radius: 10px;
			grid-template-columns: repeat(6, minmax(100px, 1fr));
		}

		.box a {
			transition: transform .3s;
		}

		.box a:hover {
			transition: transform .3s;
			-ms-transform: scale(1.02);
			-webkit-transform: scale(1.02);
			transform: scale(1.02);
			filter: brightness(50%);
		}

		.box img {
			border-radius: 10px;
		}

		/* LINKS */
		.link {
			padding: 50px;
			background-color: var(--dark);
			color: var(--light);
		}

		.logo {
			color: var(--dark);
		}

		/* MEDIA QUERIES */
		@media(max-width: 900px) {
			.box {
				display: grid;
				grid-gap: 20px;
				grid-template-columns: repeat(4, minmax(100px, 1fr));
			}

		}

		@media(max-width: 700px) {

			.box {
				display: grid;
				grid-gap: 20px;
				grid-template-columns: repeat(3, minmax(100px, 1fr));
			}

		}

		@media(max-width: 500px) {

			.wrapper {
				font-size: 15px;
			}

			h1 {
				text-align: center;
				font-size: 18px;
			}

			.box {
				display: grid;
				grid-gap: 20px;
				grid-template-columns: repeat(1, 1fr);
				text-align: center;
			}

			.box a:hover {
				transition: transform .3s;
				-ms-transform: scale(1);
				-webkit-transform: scale(1);
				transform: scale(1.2);
			}

			.logos {
				display: grid;
				grid-gap: 20px;
				grid-template-columns: repeat(2, 1fr);
				text-align: center;
			}

		}

		.container {
			position: relative;
			text-align: center;
			color: white;
			width: 100%;

		}

		.centered {
			position: absolute;
			top: 70px;
			left: 50%;
			transform: translate(-50%, -50%);
		}

		.bottom-centered {
			position: absolute;
			bottom: 20px;
			left: 40%;
			font-size: 90PX;
			font-weight: bolder;
		}

		.showcase {
			height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
			text-align: center;
			color: #fff;
			padding: 0 20px;
		}

		.video-container {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 99%;
			overflow: hidden;
			background: var(--primary-color) url('./https://traversymedia.com/downloads/cover.jpg') no-repeat center center/cover;
		}

		.video-container video {
			min-width: 100%;
			min-height: 100%;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			object-fit: cover;
		}

		.video-container:after {
			content: '';
			z-index: 1;
			height: 100%;
			width: 100%;
			top: 0;
			left: 0;
			background: rgba(0, 0, 0, 0.5);
			position: absolute;
		}

		.content {
			z-index: 2;
			position: absolute;
			top: 70px;
			left: 50%;
			transform: translate(-50%, -50%);
		}
	</style>
</head>

<body>
	<script>
		window.console = window.console || function(t) {};
	</script>
	<script>
		if (document.location.search.match(/type=embed/gi)) {
			window.parent.postMessage("resize", "*");
		}
	</script>
	<center>

	</center>
	<section class="showcase">
		<div class="video-container">
			<video src="home.mp4" autoplay muted loop></video>
		</div>
		<div class="content">
			<ul class="menu-bar">
				<a href="#home" style="text-decoration: none;">
					<li>Home</li>
				</a>
				<a href="#movies" style="text-decoration: none;">
					<li>Movies</li>
				</a>
				<a href="#originals" style="text-decoration: none;">
					<li>Originals</li>
				</a>
				<a href="#" style="text-decoration: none;">
					<li>Recently Added</li>
				</a>
				<a href="settings.php" style="text-decoration: none;">
					<li>Profile</li>
				</a>
			</ul>
		</div>
		<div class="bottom-centered">Euphoria.</div>
	</section>

	<!---->
	</div>


	<body>
		<div class="wrapper">

			<!-- MAIN CONTAINER -->
			<section class="main-container">
				<div class="location" id="home">
					<h1 id="home">Popular on Streamio</h1>
					<div class="box">
						<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p1.PNG?raw=true" alt=""></a>
						<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p2.PNG?raw=true" alt=""></a>
						<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p3.PNG?raw=true" alt=""></a>
						<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p4.PNG?raw=true" alt=""></a>
						<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p5.PNG?raw=true" alt=""></a>
						<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p6.PNG?raw=true" alt=""></a>

						<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p7.PNG?raw=true" alt=""></a>
						<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p8.PNG?raw=true" alt=""></a>
						<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p9.PNG?raw=true" alt=""></a>
						<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p10.PNG?raw=true" alt=""></a>
						<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p11.PNG?raw=true" alt=""></a>
						<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p12.PNG?raw=true" alt=""></a>
					</div>
				</div>


				<h1 id="myList">Trending Now</h1>
				<div class="box">
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t1.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t2.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t3.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t4.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t5.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t6.PNG?raw=true" alt=""></a>
				</div>

				<h1 id="tvShows">TV Shows</h1>
				<div class="box">
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv1.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv2.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv3.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv4.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv5.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv6.PNG?raw=true" alt=""></a>

					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv7.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv8.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv9.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv10.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv11.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/tv12.PNG?raw=true" alt=""></a>
				</div>


				<h1 id="movies">Blockbuster Action & Adventure</h1>
				<div class="box">
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/m1.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/m2.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/m3.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/m4.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/m5.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/m6.PNG?raw=true" alt=""></a>
				</div>

				<h1 id="originals">Streamio Originals</h1>
				<div class="box">
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/o1.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/o2.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/o3.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/o4.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/o5.PNG?raw=true" alt=""></a>
					<a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/o6.PNG?raw=true" alt=""></a>
				</div>
			</section>
			<!-- END OF MAIN CONTAINER -->
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	</body>

</html>