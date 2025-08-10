<?php
// Database configuration
$dbuser = "root";
$dbpass = "";
$host = "localhost";
$db = "u519977364_sbbl";

// Create a new MySQLi connection
$mysqli = new mysqli($host, $dbuser, $dbpass, $db);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Optional: set charset
$mysqli->set_charset("utf8mb4");
?>
