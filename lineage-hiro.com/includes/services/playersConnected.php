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
