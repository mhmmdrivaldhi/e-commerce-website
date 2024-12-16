<?php 

    session_start();
    if($_SESSION['login-btn'] == false) {
        header('location: login.php');
    }
    
?>