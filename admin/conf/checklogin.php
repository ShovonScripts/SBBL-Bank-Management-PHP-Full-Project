<?php
// Function to check admin login session
function check_login() {
    // Start session if not already started
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // If admin_id is not set or empty, redirect to admin login page
    if (empty($_SESSION['admin_id'])) {
        $host = $_SERVER['HTTP_HOST'];
        $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = "pages_index.php"; // Update this if your admin login page has a different filename
        $_SESSION["admin_id"] = "";
        header("Location: http://$host$uri/$extra");
        exit();
    }
}
?>
