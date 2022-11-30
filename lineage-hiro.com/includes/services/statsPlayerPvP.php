<?php
error_reporting(0);
include 'includes/services/checkConnectionGame.php';

$sql = "SELECT * FROM characters ORDER BY pvpkills DESC LIMIT 10;";
if ($result = $mysqli->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        print "<h6>Player : ".$row['char_name'] . " -> " . $row['pvpkills']." PVPS</h6>";
    }
    $result->free_result();
}


$mysqli->close();