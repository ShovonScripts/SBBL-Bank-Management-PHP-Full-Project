<?php
// Database configuration for PDO
$dbuser = "u519977364_sbbl";
$dbpass = "Sbbl@123";
$host = "localhost";
$db = "u519977364_sbbl";

try {
    $DB_con = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $dbuser, $dbpass);
    $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
