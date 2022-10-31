<?php
error_reporting(0);
include 'includes/services/checkConnection.php';
$error = "";

$account = $_POST['username'];
$password = hash_hmac('sha256', $_POST['password'], 'secret');
$email = $_POST['email'];

if ($_POST['password'] != $_POST['passwordVerify']) {
    $error .= "Password does not match.<br>";
}

if (mb_strlen($account) < 4 || mb_strlen($account) > 14) {
    $error .= "Account length must be 4 to 14 characters long.";
}

if (mb_strlen($_POST['password']) < 4 || mb_strlen($_POST['password']) > 16) {
    $error .= "Password length must be 4 to 16 characters long.";
}

if (mb_strlen($email) < 7 || mb_strlen($email) > 100) {
    $error .= "Email length must be 7 to 100 characters long.";
}

$sql = "SELECT `login` FROM `accounts` WHERE `login`='" . $account . "'";
$result = $conn->query($sql);
if ($result->num_rows != 0) {
    $error .= "Account already exists.<br>";
}
echo ($account . $password . $email);
$sqlregister = "INSERT INTO `accounts` (`login`, `password`, `last_access`, `access_level`, `last_ip`, `last_server`, `bonus`, `bonus_expire`, `ban_expire`, `allow_ip`,`allow_hwid`,`points`, `phone_nubmer`) VALUES ('" . $account . "','" . $password . "','0','0','" . $_SERVER['REMOTE_ADDR'] . "','0','0','0','0','0','0','0', '0')";
$conn->query($sqlregister);

if ($conn->query($sqlregister) === TRUE) {
    $error = "Account created!";
    header("Location:http://localhost/Account_Manager/index.php");
} else {
    $error = "Something went wrong.";
}

$conn->close();
