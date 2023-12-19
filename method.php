<?php
    session_start();
    ob_start();
    include "./config/database.php";
    if(isset($_GET['act'])){
        switch ($_GET['act']){
            case 'logout': 
                if(isset($_SESSION['role'])) {
                    unset($_SESSION['role']);
                    unset($_SESSION['username']);
                }
                header('location: login.php');
                break;
            case 'changePass':
                header('location: ./admin/changePass.php');
                break;
        }
    }
?>