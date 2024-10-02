<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('location: login.php');
    exit;
}

echo "Welcome, " . $_SESSION['username'];

?>