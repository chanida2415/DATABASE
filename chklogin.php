<?php
    include 'config.php';
    include 'classes/DB.php';
    session_start();
    if(isset($_GET["uname"]) && isset($_GET["psw"])) {
        $user = $_GET["uname"];
        $pass = $_GET["psw"];
        $conn = DB::getInstance();
        $sql = "SELECT *
                FROM customer 
                WHERE c_id = '$user'
                    AND password = '$pass'
                ";
    
        $stmt = $conn->dbh->prepare( $sql );
        $stmt->execute();
        $result = $stmt->fetchAll( PDO::FETCH_ASSOC );
        $conn = null;
        //$admin = mysqli_query($user,$pass)     
    
        //$row = mysqli_fetch_array($admin);
        //echo print_r($user,true);
        //echo print_r($pass,true); //เอาไว้ปริ้น ดูค่าที่ select มา
        //count($result);
        if (sizeof($result) != 0) {
            $_SESSION["name"] = $result["0"]["c_name"];
            $_SESSION["surname"] = $result["0"]["c_surname"];
            $_SESSION["tel"] = $result["0"]["c_tel"];
            $_SESSION["stat"] = $result["0"]["status"];
            //print_r($result);
            //die;
            if($_SESSION["stat"] == "a"){
                echo "<script>alert('สำหรับ Admin')</script>";
                header("Refresh:0.5; url=Insert.php");
            } else  {
                echo "<script>alert('สำเร็จ')</script>";
                header("Refresh:0.5; url=index.php");
            }
        }
    }
       
            
        
        /*else {
            $result = mysqli_query($user,$pass);
        ($user = 'admin' && $pass = '1234')
        
        }

       

        }
         else echo '....';
            

            
    /*if(sizeof($result) != 0) {
        $userad = $_GET["uname"];
        $passad = $_GET["psw"];

        $userad = 'admin';
        $passad = '1234';

        header("Refresh:0.5; url=Insert.php");
    }*/
    
        //DB::checkResult($result);
       /* if(isset($result) && sizeof($result) != 0) {
                $_SESSION["name"] = $result["0"]["sup_Name"];
                $_SESSION["email"] = $result["0"]["sup_Email"];
                $_SESSION["phone"] = $result["0"]["sup_Phone"];
                $_SESSION["id"] = $result["0"]["sup_ID"];
                $_SESSION["address"] = $result["0"]["sup_Address"];
        }*/
       // echo json_encode($result);