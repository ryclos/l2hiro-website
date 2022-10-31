<?php
include 'includes/config_auth.php';
try {
	$conn = new mysqli($server_host_auth, $db_user_name_auth, $db_user_password_auth, $db_database_auth);
} catch (\Throwable $th) {
    $error = "Can't Connect to MySQL <h5>" . mysqli_connect_error() . "</h5>";
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}