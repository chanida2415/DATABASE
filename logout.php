<?php 
    session_start();
    session_destroy();
    session_unset();
    echo "<script> alert('ออกจากระบบสำเร็จ!'); </script>";
    header( 'refresh:0.5;url=index.php' );
    exit(0);