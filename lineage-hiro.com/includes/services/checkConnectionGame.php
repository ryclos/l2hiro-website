<?php
include 'includes/config.php';
try {
	$mysqli = new mysqli($server_host, $db_user_name, $db_user_password, $db_database);
} catch (\Throwable $th) {
    $error = "Can't Connect to MySQL <h5>" . mysqli_connect_error() . "</h5>";
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}