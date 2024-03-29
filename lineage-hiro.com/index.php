<?php
header("Cache-Control: no-cache, must-revalidate");
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

	<title>LineageII Hiro - Main</title>
	<link href="css/style.css" rel="stylesheet">
	<link href="images/hiro.ico" rel="icon" type="image/x-icon">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,500' rel='stylesheet' type='text/css'>
	<script src="js/bootstrap.min.js"></script>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<script language="javascript">
		$(document).ready(function() {

			$('#register').submit(function() {

				if ($('#password').val() != $('#passwordVerify').val()) {
					alert("Please re-enter confirm password");
					$('#passwordVerify').val('');
					$('#passwordVerify').focus();
					return false;
				}

				function clear_form() {
					$("#email").val('');
					$("#username").val('');
					$("#password").val('');
					$("#passwordVerify").val('');
				}
			});
		});
	</script>
</head>

<body>
	<div id="preloader">
		<div id="preloader-image">
		</div>
	</div>


	<div class="p-anim">
	</div>
	<video playsinline autoplay muted loop id="bgvid">
		<source src="media/bg.webm" type="video/webm">
		<source src="media/bg.mp4" type="video/mp4">
	</video>

	<header>
		<div class="container">
			<div class="header-left">
				<?php
				include_once 'includes/services/playersConnected.php';
				?>
				<br>


				<!-- <iframe src="https://discordapp.com/widget?id=758897512181530644&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe> -->
			</div>
			<div class="header-right">
				<div class="menu">
					<a href="index.php">MAIN</a>
					<a href="download.php">DOWNLOAD</a>
					<a href="https://discord.gg/kMBJkcXyab" target="_blank">DISCORD</a>
					<!-- <a href="#">DONATE</a> -->
					<a href="<?php echo $forum; ?>" target="_blank">FORUM</a>
				</div>
				<img src="images/logo.png" width="75%">

				<!-- <img src="images/logo.png" width="100%"> -->

				<div class="statuses">
					<!-- <div class="entercp">
						Login to your <a data-target="#modalLogin" data-toggle="modal" type="button">Account</a> or
						<a data-target="#modalForgot" data-toggle="modal" type="button">RESTORE PASSWORD</a>
					</div> -->
					<br>


					<!-- <div class="register">
						<a data-target="#modalRegister" data-toggle="modal" type="button">CREATE AN ACCOUNT</a>
					</div> -->
					<div class="messages">
						<h4>
							<font color="#FFFFFF">
								<?php
								echo (!empty($error) ? "<label><strong>" . $error . "</strong></label>" : '');
								?>
							</font>
						</h4>
					</div>
				</div>
			</div>
		</div>
	</header>


	<div class="modal fade" id="modalRegister" role="dialog">
		<div class="container">
			<br>
			<!-- Modal content-->


			<div class="form">
				<div class="modal-body">
					<div class="modal-header">
						<!-- <button class="close" data-dismiss="modal" type="button">&times;</button>

						<h4 class="modal-title">Register Account</h4> -->
					</div>


					<div>
						<form id="register" method="post">
							<div class="form-group">
								<input class="form-control" data-error="Account name is required." id="username" name="username" placeholder="Please enter your Account" required="required" type="text" value="<?php if (isset($_POST['username'])) echo $_POST['username'] ?>">

								<div class="help-block with-errors">
								</div>
							</div>


							<div class="form-group">
								<input class="form-control" data-error="Valid email is required." id="email" name="email" placeholder="Please enter your Email" required="required" type="email" value="<?php if (isset($_POST['email'])) echo $_POST['email'] ?>">

								<div class="help-block with-errors">
								</div>
							</div>


							<div class="form-group">
								<input class="form-control" data-error="Password is required." id="password" name="password" placeholder="Please enter your Password" required="required" type="password" value="<?php if (isset($_POST['password'])) echo $_POST['password'] ?>">

								<div class="help-block with-errors">
								</div>
							</div>


							<div class="form-group">
								<input class="form-control" data-error="Verify Password is required." id="passwordVerify" name="passwordVerify" placeholder="Please re-enter your Password" required="required" type="password" value="<?php if (isset($_POST['password'])) echo $_POST['password'] ?>">

								<div class="help-block with-errors">
								</div>
							</div>
							<input class="form-btn btn" id="submit" name="register" type="submit" value="REGISTER">
						</form>

					</div>


					<div class="modal-footer">
						<div class="messages">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modalLogin" role="dialog">
		<div class="container">
			<br>
			<!-- Modal content-->


			<div class="form">
				<div class="modal-body">
					<div class="modal-header">
						<button class="close" data-dismiss="modal" type="button">&times;</button>

						<h4 class="modal-title">Login</h4>
					</div>


					<div>
						<form id="login" method="post">
							<div class="form-group">
								<input class="form-control" data-error="Account name is required." id="username" name="username" placeholder="Please enter your Account" required="required" type="text" value="<?php if (isset($_POST['username'])) echo $_POST['username'] ?>">

								<div class="help-block with-errors">
								</div>
							</div>


							<div class="form-group">
								<input class="form-control" data-error="Password is required." id="password" name="password" placeholder="Please enter your Password" required="required" type="password" value="<?php if (isset($_POST['password'])) echo $_POST['password'] ?>">

								<div class="help-block with-errors">
								</div>
							</div>

							<input class="form-btn btn" id="submit" name="login" type="submit" value="LOGIN">

						</form>
					</div>


					<div class="modal-footer">
						<div class="messages">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modalForgot" role="dialog">
		<div class="container">
			<br>
			<!-- Modal content-->


			<div class="form">
				<div class="modal-body">
					<div class="modal-header">
						<button class="close" data-dismiss="modal" type="button">&times;</button>

						<h4 class="modal-title">Forgot My password</h4>
					</div>


					<div>
						<form id="login" method="post">
							<div class="form-group">
								<input class="form-control" data-error="Account name is required." id="username" name="username" placeholder="Please enter your Account" required="required" type="text" value="<?php if (isset($_POST['username'])) echo $_POST['username'] ?>">

								<div class="help-block with-errors">
								</div>
							</div>

							<div class="form-group">
								<input class="form-control" data-error="Valid email is required." id="email" name="email" placeholder="Please enter your Email" required="required" type="email" value="<?php if (isset($_POST['email'])) echo $_POST['email'] ?>">

								<div class="help-block with-errors">
								</div>
							</div>

							<input class="form-btn btn" id="submit" name="forgot" type="submit" value="Restore">

						</form>
					</div>


					<div class="modal-footer">
						<div class="messages">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- BANNIERE -->
	<a href="https://l2network.eu/index.php?a=in&u=hybrid" target="_blank">
		<img src="https://l2network.eu/images/sidebanner.png" alt="L2Network" style="display:block;width:145px;height:122px;position:fixed;bottom:12rem;right:0;z-index:999;" alt="L2Network" />
	</a>
	<a href="https://l2topzone.com/vote/id/18373" target="_blank" title="l2topzone">
		<img src="https://l2topzone.com/vb/l2topzone-Lineage2-vote-banner-bottom-left-3.gif" style="position: fixed; z-index:99999; bottom: 4.3rem; left: 0;" alt="l2topzone.com" border="0">
	</a>
	<div style='position: fixed; z-index:99999; bottom: 4.0rem; right: 0;'>
		<a href="https://la2.mmotop.ru/fr/servers/36567/votes/new" target="_blank">
			<img src="images/mmo_36567.png" border="0" id="mmotopratingimg" alt="lien de vote mmotop">
		</a>
	</div>
	<!-- BANNIERE -->
	<div class="footer">
		<a href="http://l2jmobius.org"><img alt="" src="images/l2jmobius.png" title=""></a>
	</div>
	<script>
		var url = 'index.php';
	</script>
	<script src="js/jquery.cookie.min.js">
	</script>
	<script src="js/scripts.js">
	</script>
	<script src="js/validator.js">
	</script>
	<script src="js/register.js">
	</script>
	<!--[if lt IE 9]>
<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="//oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</body>

</html>