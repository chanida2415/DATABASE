<?php 
    ob_start();
    include 'config.php';
    include 'classes/DB.php';
    session_start();
    if(isset($_SESSION["name"]) && isset($_GET["nameMovie"]) && isset($_GET["Theater"]) && isset($_GET["time"]) && isset($_GET["sum"]) && isset($_GET["seat"])) {
        $m_name = $_GET["nameMovie"];
        $t_no = $_GET["Theater"]; 
        $start = $_GET["time"];
        $price = $_GET["sum"];
        $seat = $_GET["seat"]; //ต้องเอามาแยก
        $c_name = $_SESSION["name"];
        //echo $seat . "<br>";
        // R1S1 R2S2 
        $conn = DB::getInstance();
        $sql = "INSERT INTO booking2 (start,t_no,price,m_name,c_name)
                VALUES ('$start' , '$t_no' , $price , '$m_name' , '$c_name')
                ";

        $stmt = $conn->dbh->prepare( $sql );
        $stmt->execute();
        $conn = null;
        //----------------------------------------------------
        $conn = DB::getInstance();
        $sql = "SELECT booking_no
                FROM booking2 
                WHERE t_no = '$t_no'
                    AND price = $price
                    AND m_name = '$m_name'
                    AND c_name = '$c_name'
                ORDER BY booking_no DESC
                LIMIT 1
                ";

        $stmt = $conn->dbh->prepare( $sql );
        $stmt->execute();
        $result = $stmt->fetchAll( PDO::FETCH_ASSOC );
        $conn = null;
        $booking_no = $result["0"]["booking_no"];
        //------------------------------------------------------
        $seat_no = explode(" ",$seat);  
        //echo $sql  . "<br>";
        //echo $booking_no  . "<br>"; 
        for ($i= 0; $i < sizeof($seat_no) - 1; $i++) { 
            $conn = DB::getInstance();
            $sql = "INSERT INTO bookingdetail (booking_no,position,start,t_no,m_name)
                    VALUES ($booking_no , " . "'". $seat_no[$i] . "'," . "'". $start . "'," . "'". $t_no . "'," . "'". $m_name . "'" . ")";
            $stmt = $conn->dbh->prepare( $sql );
            $stmt->execute();
            $conn = null;
        }

        //--------------------------------------------------------
        echo "<script>alert('จองตั๋วสำเร็จ')</script>";
        header("Refresh:0.5; url=sum.php?nameMovie=" . $_GET["nameMovie"] . "&Theater=" . $_GET["Theater"] . "&getimg=" . $_GET["getimg"] . "&time=" . $_GET["time"] . "&seat=". $_GET["seat"] . "&sum=". $_GET["sum"]);
    }