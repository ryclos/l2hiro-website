<?php
error_reporting(0);
include 'includes/services/checkConnection.php';
$error = "";

$account = $_POST['username'];
$password = hash_hmac('sha256', $_POST['password'], 'secret');

if ($account == '')
    $error = 'Enter account';
if ($password == '')
    $error = 'Enter password';

$sql = "SELECT * FROM `accounts` WHERE `login`='" . $account . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        if ($password == $row['password']) {
            $_SESSION['account'] = $account;
            $_SESSION['password'] = $password;
            $error = "You are connected. Redirecting . . .";
            header("refresh:1;url=dashboard.php");
        } else {
            $error = 'Password does not match.';
        }
    }
} else {
    $error = 'Account does not exist. <a data-target="#modalRegister" data-toggle="modal" type="button">Create one.</a>';
}

$conn->close();
