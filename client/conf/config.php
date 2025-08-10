<?php
$dbuser = "root";
$dbpass = "";   // or the actual correct password
$host = "localhost";
$db = "u519977364_sbbl";

// Create connection
$mysqli = new mysqli($host, $dbuser, $dbpass, $db);

// Check connection
if ($mysqli->connect_error) {
    die("Database connection failed: " . $mysqli->connect_error);
}
?>
