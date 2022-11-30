<?php

error_reporting(0);

if (empty($_SESSION['account'])) {
	header('Location: index.php');
}

$error = "";
include 'includes/services/checkConnection.php';

$account = mysqli_real_escape_string($conn, $_SESSION['account']);
$password = base64_encode(sha1($_POST['password'], true));
$passwordOld = base64_encode(sha1($_POST['passwordOld'], true));

if ($_POST['password'] != $_POST['passwordVerify']) {
	$error .= "Password does not match.<br>";
}
if (mb_strlen($_POST['passwordOld']) < 4 || mb_strlen($_POST['passwordOld']) > 16) {
	$error .= "Old Password length must be 4 to 16 characters long.";
}

if (mb_strlen($_POST['password']) < 4 || mb_strlen($_POST['password']) > 16) {
	$error .= "Password length must be 4 to 16 characters long.";
}

if ($password == '')
	$error = 'Enter password';

if ($passwordOld == '')
	$error = 'Enter old password';

$sql = "SELECT * FROM `accounts` WHERE `login`='" . $account . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {

		if ($passwordOld == $row['password']) {
			$error = "";
		} else {
			$error = 'Incorrect Old password';
		}
	}
} else {
	$error = 'Something went wrong [1]';
}
if (empty($error)) {
	$sqlupdate = "UPDATE `accounts` SET `password`='" . $password . "' WHERE (`login`='" . $account . "')";
	if ($conn->query($sqlupdate) === TRUE) {
		$error = "Password Successfuly Updated";
		$_SESSION['password'] = $password;
		header("refresh:2;url=dashboard.php");
	} else {
		$error = "Something went wrong [2]";
	}
}

$conn->close();
