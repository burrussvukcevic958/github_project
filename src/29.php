<?php
$github_username = 'GitHub_Username';
$github_password = 'GitHub_Passwd';

session_start();

if (!isset($_SESSION['token']) && !isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// Replace these with your actual GitHub API credentials and token
require_once('includes/auth.php');

// Your code goes here

?>
