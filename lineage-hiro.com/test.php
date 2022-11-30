<?php
include_once "includes/config.php";
?>
<!DOCTYPE html>

<html lang="en">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="" name="description">
	<meta content="" name="keywords">
	<script src="js/jquery.min.js" type="text/javascript">
	</script>

	<title>LineageII Hiro - Download</title>
	<!-- <link href="css/style.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
	<link href="images/hiro.ico" rel="icon" type="image/x-icon">
	<script src='https://www.google.com/recaptcha/api.js'>
	</script>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,500' rel='stylesheet' type='text/css'>
	</script>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<style>
		.parallax {
			/* The image used */
			background-image: url("images/l2-background.jpg");

			/* Set a specific height */
			min-height: 500px;

			/* Create the parallax scrolling effect */
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>

<body class="parallax">
	<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img src="images/hiro.ico" alt="" width="30" height="24" class="d-inline-block align-text-top">
				L2-Hiro
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Download</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Statistique</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Discord</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Donates</a>
					</li>
					<!-- <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Dropdown link
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<li><a class="dropdown-item" href="#">Action</a></li>
							<li><a class="dropdown-item" href="#">Another action</a></li>
							<li><a class="dropdown-item" href="#">Something else here</a></li>
						</ul>
					</li> -->
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
		<header>
			<!-- Intro settings -->
			<style>
				/* Default height for small devices */
				#intro-example {
					height: 400px;
				}

				/* Height for devices larger than 992px */
				@media (min-width: 992px) {
					#intro-example {
						height: 300px;
					}
				}
			</style>

			<!-- Background image -->
			<div id="intro-example" class="p-5 text-center bg-image">
				<div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
					<div class="d-flex justify-content-center align-items-center h-100">
						<div class="text-white">
							<h1 class="mb-3">WELCOME TO THE WORLD OF L2 HIRO</h1>
							<h5 class="mb-4">Want to join US ?</h5>
							<a class="btn btn-outline-light btn-lg m-2" href="<?php echo $dlClient; ?>" role="button" rel="nofollow">DOWNLOAD THE GAME</a>
							<a class="btn btn-outline-light btn-lg m-2" href="<?php echo $dlPatch; ?>" role="button">DOWNLOAD THE LAUNCHER</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Background image -->
		</header>
		<section>
			<!-- Replace "test" with your own sandbox Business account app client ID -->
			<script src="https://www.paypal.com/sdk/js?client-id=AdOvoqZM-sHzzO9OAyglocuVNxcF1QrkMhl4yuvqmgHaMf9aZonFVoyifEFfoJ1vK3GYU38M9nCqeraG&currency=USD"></script>
			<!-- Set up a container element for the button -->
			<div id="paypal-button-container"></div>
			<script>
				paypal.Buttons({
					// Sets up the transaction when a payment button is clicked
					createOrder: (data, actions) => {
						return actions.order.create({
							purchase_units: [{
								amount: {
									value: '77.44' // Can also reference a variable or function
								}
							}]
						});
					},
					// Finalize the transaction after payer approval
					onApprove: (data, actions) => {
						return actions.order.capture().then(function(orderData) {
							// Successful capture! For dev/demo purposes:
							console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
							const transaction = orderData.purchase_units[0].payments.captures[0];
							alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
							// When ready to go live, remove the alert and show a success message within this page. For example:
							// const element = document.getElementById('paypal-button-container');
							// element.innerHTML = '<h3>Thank you for your payment!</h3>';
							// Or go to another URL:  actions.redirect('thank_you.html');
						});
					}
				}).render('#paypal-button-container');
			</script>
		</section>
		<section>
			<aside>
				<div class="card" style="width: 18rem;">
					<ul class="list-group list-group-flush">
						<li class="list-group-item">An item</li>
						<li class="list-group-item">A second item</li>
						<li class="list-group-item">A third item</li>
					</ul>
					<div class="card-footer">
						Card footer
					</div>
				</div>
			</aside>
		</section>
		<footer class="text-center text-white" style="background-color: #caced1;">
			<!-- Grid container -->
			<div class="container p-4">
				<!-- Section: Images -->
				<section class="">
					<div class="row">
						<div class="col-lg-2 col-md-12 mb-4 mb-md-0">
							<div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
								<img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/113.webp" class="w-100" />
								<a href="#!">
									<div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
								</a>
							</div>
						</div>
						<div class="col-lg-2 col-md-12 mb-4 mb-md-0">
							<div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
								<img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/111.webp" class="w-100" />
								<a href="#!">
									<div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
								</a>
							</div>
						</div>
						<div class="col-lg-2 col-md-12 mb-4 mb-md-0">
							<div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
								<img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/112.webp" class="w-100" />
								<a href="#!">
									<div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
								</a>
							</div>
						</div>
						<div class="col-lg-2 col-md-12 mb-4 mb-md-0">
							<div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
								<img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/114.webp" class="w-100" />
								<a href="#!">
									<div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
								</a>
							</div>
						</div>
						<div class="col-lg-2 col-md-12 mb-4 mb-md-0">
							<div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
								<img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/115.webp" class="w-100" />
								<a href="#!">
									<div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
								</a>
							</div>
						</div>
						<div class="col-lg-2 col-md-12 mb-4 mb-md-0">
							<div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
								<img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/116.webp" class="w-100" />
								<a href="#!">
									<div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
								</a>
							</div>
						</div>
					</div>
				</section>
				<!-- Section: Images -->
			</div>
			<!-- Grid container -->

			<!-- Copyright -->
			<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
				© 2022 Copyright:
				<a class="text-white" href="#">l2Classic - Hiro</a>
			</div>
			<!-- Copyright -->
		</footer>
		<script>
			var url = 'download.php';
		</script>
		<script src="js/jquery.cookie.min.js">
		</script>
		<script src="js/scripts.js">
		</script>
		<script src="js/validator.js">
		</script>
		<script src="js/register.js">
		</script>
		<script src="css/bootstrap/js/bootstrap.bundle.js"></script>
		<script src="css/bootstrap/js/bootstrap.js"></script>
		<!--[if lt IE 9]>
<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="//oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
	</div>
</body>
<!-- TOI REGARDER MON CODE ZIZI? TOI VOULOIR AIDER MOI? KAMUCHKA! VIENS ME PM SUR DISCORD -->

</html>