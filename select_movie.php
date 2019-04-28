<?php 
    include 'config.php';
    include 'classes/DB.php';
    session_start();
        //echo $seat . "<br>";
        // R1S1 R2S2 
        $conn = DB::getInstance();
        $sql = "SELECT *
                FROM movie 
                ORDER BY m_id ASC
                ";

        $stmt = $conn->dbh->prepare( $sql );
        $stmt->execute();
        $result = $stmt->fetchAll( PDO::FETCH_ASSOC );
        $conn = null;
        echo json_encode($result);
        //----------------------------------------------------