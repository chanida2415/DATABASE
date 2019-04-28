<?php 
    ob_start();
    include 'config.php';
    include 'classes/DB.php';
    session_start();

        if (isset($_SESSION["name"])){
            header("Refresh:0.5; url=bookticket.php");
            
        }
        else {
            echo "<script>alert('กรุณาล็อคอิน')</script>";
            header("Refresh:0.5; url=login.php");
        }