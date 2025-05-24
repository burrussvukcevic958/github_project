<?php
// Initialize session
session_start();

// Check if user is already logged in or not
if (!isset($_SESSION['username']) || !isset($_SESSION['email'])) {
    // Redirect to login page
    header("Location: https://example.com/login");
    exit();
}

// Your code goes here

?>
