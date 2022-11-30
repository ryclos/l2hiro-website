<?php
error_reporting(0);
include 'includes/services/checkConnectionGame.php';

$sql = "SELECT count(*) FROM characters WHERE online =1;";
$result = $mysqli->query($sql);
$row = $result->fetch_row();
$row[0] += 20; // Calcule fictif
print "<h6>" . "Online Players : " . $row[0] ."<h6>";



$mysqli->close();
