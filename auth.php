<?php
session_start();

function requireLogin() {
    if (!isset($_SESSION['username'])) {
        header('Location: ../login.php');
        exit();
    }
}

function requireAdminRole() {
    if(isset($_SESSION['role'])==0) {
        header('location: ../index.php');
        exit();
    } 
}
?>
