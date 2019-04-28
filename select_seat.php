<?php 
    include 'config.php';
    include 'classes/DB.php';
    session_start();
        $m_name = $_GET["nameMovie"];
        $t_no = $_GET["Theater"]; 
        $start = $_GET["time"];
        //echo $seat . "<br>";
        // R1S1 R2S2 
        $conn = DB::getInstance();
        $sql = "SELECT position
                FROM bookingdetail 
                WHERE t_no = '$t_no'
                    AND m_name = '$m_name'
                    AND start = '$start'
                ORDER BY booking_no
                ";

        $stmt = $conn->dbh->prepare( $sql );
        $stmt->execute();
        $result = $stmt->fetchAll( PDO::FETCH_ASSOC );
        $conn = null;
        echo json_encode($result);
        //----------------------------------------------------