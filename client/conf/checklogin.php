<?php
// Function to verify client session
function check_login() {
    session_start(); // Make sure session is started

    if (empty($_SESSION['client_id'])) {
        $host = $_SERVER['HTTP_HOST'];
        $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = "pages_client_index.php";
        $_SESSION["client_id"] = "";
        header("Location: http://$host$uri/$extra");
        exit();
    }
}
?>
