<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    echo "Welcome, $username!";
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: login.php");
    exit();
}
?>
