<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mexican Lottery</title>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/icono.png" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a class="site-logo" href="index.php">
				<img width="200" height="40" src="img/logomex.png" alt="">
			</a>
			<div class="user-panel">
				<a href="Login.php">Login</a>  /  <a href="#">Register</a>
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page section -->
	<section class="page-section spad contact-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="contact-form-warp">
						<h4 class="comment-title">Register</h4>
						<form id="form-register" method="POST">
							
								
									<div class="col-lg-12">
										<input id="Name" name="Name" type="text" placeholder="Name" size="50">
										<br>
										<br>
										<input id="LastName" name="LastName" type="text" placeholder="Last name" size="50">
										<br>
										<br>
										<input id="UserName" name="UserName" type="text" placeholder="Username" size="50">
										<br>
										<br>
										<input id="Email" name="Email" type="email" placeholder="Email" size="50">
										<br>
										<br>
										<input id="Password" name ="Password" type="password" placeholder="Password" size="50">
										<br>
										<br>
										<input id="CardNumber" name="CardNumber" type="text" maxlength="18" size="50" placeholder="Card Number">
										<br>
										<br>
									</div>
									<div class="col-lg-2">
										<input type="text" id="CVV" name="CVV" maxlength="3" size="3" placeholder="CVV"><br><br>
									</div>
						</form>
						<div class="col-lg-12">
							<button class="site-btn btn-sm"  onclick="submit()" id="btn">Register</button>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->
	<section class="footer-top-section">
		<div class="container">
			
		</div>
	</section>
	
	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			
			
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script>
	<!--====== Personales ======-->
	<script src="lottery_js/register.js"></script>


	

    </body>
</html>