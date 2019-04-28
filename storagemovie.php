<?php
    include 'config.php';
    include 'classes/DB.php';
   
   // print_r($_GET);
    if(isset($_GET["nmovie"]) && isset($_GET["nameauthor"]) && isset($_GET["datein"]) && isset($_GET["dateout"])) {
        $mn = $_GET["nmovie"];
        $au = $_GET["nameauthor"];
        $di = $_GET["datein"];
        $do = $_GET["dateout"];

        $conn = DB::getInstance();
        $sql = "INSERT INTO movie (m_name,author,date_in,date_out)
                VALUES ('$mn' , '$au' , '$di' , '$do' )
                ";
 
        $stmt = $conn->dbh->prepare( $sql );
        $stmt->execute();
        $conn = null;
        //$result = $stmt->fetchAll( PDO::FETCH_ASSOC );
        //print_r($result); เอาไว้ปริ้น ดูค่าที่ select มา

        if(isset($sql) != 0) {
            echo "<script>alert('[Insert สำเร็จ]')</script>";
            header("Refresh:0.5; url=Insert.php");
        } /*else {
            echo "<script>alert('ใส่ข้อมูลผิดพลาด')</script>";
        }*/
    }
        //DB::checkResult($result);
       /* if(isset($result) && sizeof($result) != 0) {
                $_SESSION["name"] = $result["0"]["sup_Name"];
                $_SESSION["email"] = $result["0"]["sup_Email"];
                $_SESSION["phone"] = $result["0"]["sup_Phone"];
                $_SESSION["id"] = $result["0"]["sup_ID"];
                $_SESSION["address"] = $result["0"]["sup_Address"];
        }*/
       // echo json_encode($result);
    