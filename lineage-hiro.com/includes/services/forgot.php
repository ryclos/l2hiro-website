<?php
error_reporting(0);
include 'includes/services/checkConnection.php';
$error = "";

$account = $_POST['username'];
$email = $_POST['email'];
$admin = $CONFIG['emailaddress'];
//get a random password
$password_rnd = rand(9999, 999999);
//encode password
$password = hash_hmac('sha256', $_POST['password'], 'secret');

if ($account == '')
    $error = 'Enter account';
if ($email == '')
    $error = 'Enter email';

$sql = "SELECT * FROM `accounts` WHERE `login`='" . $account . "' AND `email`='" . $email . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        if ($email == $row['email']) {
            if ($account == $row['login']) {
                $to = $email;
                $subject = 'Your recovered Password';
                $message = 'Use this password to login ' . $password_rnd;
                $headers = 'From:' . $admin;
                if (mail($to, $subject, $message, $headers)) {
                    $update = "UPDATE `accounts` SET `password`='" . $password . "' WHERE `login`='" . $account . "'";
                    $resultupdate = $conn->query($update);
                    if ($resultupdate) {
                        $error = 'Your password has been sent to your email';
                    } else {
                        $error = 'Fail to recover your password';
                    }
                } else {
                    $error = 'Failed - Contact Administrator ' . $admin;
                }
            } else {
                $error = 'Account does not match.';
            }
        } else {
            $error = 'Email does not match.';
        }
    }
} else {
    $error = 'Email or Account does not match.';
}

$conn->close();
