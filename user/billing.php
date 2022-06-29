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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
   
   <style>
body{

    color: #bcd0f7;
    background: #1A233A;
    position: relative;
    height: 100%;
}
.pricing-plan {
    margin: 0 0 1rem 0;
    width: 100%;
    position: relative;
    background: #272e48;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.pricing-plan .pricing-header {
    padding: 0;
    margin-bottom: 1rem;
    text-align: center;
    background: linear-gradient(120deg, #00b5fd 0%, #0047b1 100%);
    -webkit-border-radius: 4px 4px 0px 0px;
    -moz-border-radius: 4px 4px 0px 0px;
    border-radius: 4px 4px 0px 0px;
}
.pricing-plan .pricing-header .pricing-title {
    font-size: 1.2rem;
    color: #ffffff;
    padding: 1rem 0;
    text-transform: uppercase;
    font-weight: 600;
    margin: 0;
    text-shadow: 0 30px 10px rgba(0, 0, 0, 0.15);
}
.pricing-plan .pricing-header .pricing-cost {
    color: #ffffff;
    padding: 1rem 0;
    font-size: 2.5rem;
    font-weight: 700;
    text-shadow: 0 30px 10px rgba(0, 0, 0, 0.15);
}
.pricing-plan .pricing-header .pricing-save {
    color: #ffffff;
    padding: 0.8rem 0;
    font-size: 1rem;
    font-weight: 700;
}
.pricing-plan .pricing-header.secondary {
    background-image: linear-gradient(120deg, #c0d64a 0%, #35690f 100%);
}
.pricing-plan .pricing-header.red {
    background-image: linear-gradient(120deg, #ff3434 0%, #a50000 100%);
}
.pricing-plan .pricing-features {
    padding: 0;
    margin: 20px 0;
    text-align: left;
}
.pricing-plan .pricing-features li {
    padding: 15px 15px 15px 40px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    position: relative;
    line-height: 100%;
}
.pricing-plan .pricing-footer {
    -webkit-border-radius: 0 0 3px 3px;
    -moz-border-radius: 0 0 3px 3px;
    border-radius: 0 0 3px 3px;
    text-align: center;
    padding: 1rem 0 2rem 0;
}
@media (max-width: 767px) {
    .pricing-plan .pricing-header {
        text-align: center;
    }
    .pricing-plan .pricing-header i {
        display: block;
        float: none;
        margin-bottom: 1.5rem;
    }
}
    </style>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> Streamio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../user/dashboard.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav><br><br>
<div class="container">
<div class="row gutters">
	<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
		<div class="pricing-plan">
			<div class="pricing-header">
				<h4 class="pricing-title">Starter</h4>
				<div class="pricing-cost">$129.00</div>
				<div class="pricing-save">Save $29.00</div>
			</div>
			<ul class="pricing-features">
				<li>5GB Linux Web Space</li>
				<li>5 MySQL Databases</li>
				<li>500 Emails</li>
				<li>250Gb mothly Transfer</li>
				<li class="text-muted"><del>24/7 Tech Support</del></li>
				<li class="text-muted"><del>Daily Backups</del></li>
			</ul>
			<div class="pricing-footer">
				<a href="#" class="btn btn-primary btn-lg">Select Plan</a>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
		<div class="pricing-plan">
			<div class="pricing-header red">
				<h4 class="pricing-title">Basic</h4>
				<div class="pricing-cost">$229.00</div>
				<div class="pricing-save">Save $49.00</div>
			</div>
			<ul class="pricing-features">
				<li>10GB Linux Web Space</li>
				<li>10 MySQL Databases</li>
				<li>1000 Emails</li>
				<li>750Gb mothly Transfer</li>
				<li>24/7 Tech Support</li>
				<li class="text-muted"><del>Daily Backups</del></li>
			</ul>
			<div class="pricing-footer">
				<a href="payment/card.php" class="btn btn-danger btn-lg">Select Plan</a>
			</div>E:\xampp\htdocs\Streamio\user\payment\index.html
		</div>
	</div>
	<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
		<div class="pricing-plan">
			<div class="pricing-header secondary">
				<h4 class="pricing-title">Ultra</h4>
				<div class="pricing-cost">$329.00</div>
				<div class="pricing-save">Save $99.00</div>
			</div>
			<ul class="pricing-features">
				<li>50GB Linux Web Space</li>
				<li>100 MySQL Databases</li>
				<li>Unlimited Emails</li>
				<li>1000Gb mothly Transfer</li>
				<li>24/7 Tech Support</li>
				<li>Daily Backups</li>
			</ul>
			<div class="pricing-footer">
				<a href="#" class="btn btn-success btn-lg">Select Plan</a>
			</div>
		</div>
	</div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>