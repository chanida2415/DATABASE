<?php
    include 'config.php';
    include 'classes/DB.php';


    if(isset($_GET["name"]) && isset($_GET["lastname"]) && isset($_GET["tel"]) && isset($_GET["username"]) && isset($_GET["psw"])) {
        $name = $_GET["name"];
        $lastname = $_GET["lastname"];
        $tel = $_GET["tel"];
        $username = $_GET["username"];
        $psw = $_GET["psw"];

        $conn = DB::getInstance();
        $sql = "INSERT INTO customer (c_id,password,c_tel,c_name,c_surname)
                VALUES ('$username' , '$psw' ,$tel , '$name' , '$lastname')
                ";


        $stmt = $conn->dbh->prepare( $sql );
        $stmt->execute();
        $conn = null;
        //$result = $stmt->fetchAll( PDO::FETCH_ASSOC );
        //print_r($result); เอาไว้ปริ้น ดูค่าที่ select มา

        if(isset($sql) != 0) {
        echo "<script>alert('[Insert สำเร็จ]')</script>";
        header("Refresh:0.5; url=index.php");
        } else {
            echo "<script>alert('ใส่ข้อมูลผิดพลาด')</script>";
        }
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
