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
	<link href="css/style.css" rel="stylesheet">
	<link href="images/hiro.ico" rel="icon" type="image/x-icon">
	<script src='https://www.google.com/recaptcha/api.js'>
	</script>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,500' rel='stylesheet' type='text/css'>
	<script src="js/bootstrap.min.js">
	</script>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
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
				error_reporting(0);
				include 'includes/config.php';

				$mysqli = new mysqli($server_host, $db_user_name, $db_user_password, $db_database);
				if (mysqli_connect_errno()) {
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					exit();
				}

				$sql = "SELECT count(*) FROM characters WHERE online =1;";
				$result = $mysqli->query($sql);
				$row = $result->fetch_row();
				print "<h6>" . "Online Players : " . $row[0] . "<h6>";
				$result->free_result();
				$mysqli->close();
				?>
			</div>
			<div class="header-right">
				<div class="menu">
					<a href="index.php">MAIN</a>
					<a href="dashboard.php">DASHBOARD</a>
					<a href="https://discord.gg/kMBJkcXyab" target="_blank">DISCORD</a>
					<!-- <a href="#">DONATE</a>
					<a href="<?php echo $forum; ?>">FORUM</a> -->
				</div>
				<img src="images/logo.png" width="75%">

				<div class="statuses">
					<br>
					<div class="register">
						<a href="<?php echo $dlClient; ?>" type="button">DOWNLOAD CLIENT</a>
					</div>
					<div class="register">
						<a href="<?php echo $dlPatch; ?>" type="button">DOWNLOAD LAUNCHER</a>
					</div>
					<!-- <div class="register">
						<a href="index.php" type="button">CREATE AN ACCOUNT</a>
					</div> -->
					<div class="messages">
					</div>
				</div>
			</div>
		</div>
	</header>

	<a href="https://l2topzone.com/vote/id/18373" target="_blank" title="l2topzone"><img src="https://l2topzone.com/vb/l2topzone-Lineage2-vote-banner-bottom-left-3.gif" style="position: fixed; z-index:99999; bottom: 4.3rem; left: 0;" alt="l2topzone.com" border="0"></a>
	<div class="footer">
		<a href="http://l2jmobius.org"><img alt="" src="images/l2jmobius.png" title=""></a>
	</div>
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
	<!--[if lt IE 9]>
<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="//oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</body>

</html>