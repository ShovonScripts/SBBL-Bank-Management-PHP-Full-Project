<?php
// Database configuration for PDO
$dbuser = "u519977364_sbbl";
$dbpass = "Sbbl@123";  // Updated password
$host = "localhost";
$db = "u519977364_sbbl";

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $DB_con = new PDO($dsn, $dbuser, $dbpass);
    $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optional: set default fetch mode to associative array
    $DB_con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
