<?php
    $dbuser = "root";
    $dbpass = "";  // Updated password
    $host = "localhost";
    $db = "u519977364_sbbl";
    
    $mysqli = new mysqli($host, $dbuser, $dbpass, $db);

    // Check for connection error
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
?>
