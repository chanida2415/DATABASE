<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head id="Head1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>หน้าหลัก</title>
    <link rel="Stylesheet" href="StyleSheet1.css" />
    <link rel="Stylesheet" href="csslogin.css" />
</head>

<body>
    <form id="form1">
        <?php include 'nav.php' ?>
        <!--body-->
        <div id="panel">
            <div style="width: 97%; margin-left: 17px;background-color:#fff;float:left;">
                <div style=" width:100%; margin-top:30px;background-color:#fff;float:left; ">
                    <div class="textsum">
                        <h1 id="headerStatus">จองตั๋วเรียบร้อยแล้ว</h1>
                    </div>
                    <div style="width:80%; float:left;padding:40px;margin-left:80px;">
                        <div class="logoimg">
                            <img src="logo2.png" style="height:250px;" />
                            <img src="textlogo.png" style="height:50px;" />
                        </div>
                        <div class="sumimg">
                            <img src ="<?php echo $_GET["getimg"] ?>" style="margin:10px;height:150px;float:left;" />
                            <div style="margin-top:15px;font-size:16px;">
                                <?php echo $_GET["nameMovie"] ?>
                            </div>
                            <div style="margin-top:15px;font-size:16px;width:50%;float:left;">
                                <?php echo $_GET["Theater"] ?><br><br>
                                Time:
                                <?php echo $_GET["time"] ?><br><br>
                                Date:
                                <?php 
                                    date_default_timezone_set("Asia/Bangkok");
                                    echo date("H:i d/m/y"); 
                                ?>
                            </div>
                            <div style="margin-top:15px;font-size:16px;float:left;">Seat:
                                <?php echo $_GET["seat"]?><br><br>Code:KMJAN18</div>
                        </div>
                        <div style="width:95%;height:70px;background-color:#e5e5e5;float:left;margin-top:10px;"><br>&nbsp;&nbsp;
                            TRANSACTION SUMMARY
                            <div style="width:30px;float:right;margin-right:30px;">
                                <?php echo $_GET["sum"] ?>.-</div>
                        </div>
                    </div>

                </div>

            </div>
        </div>


        <!--footter-->
        <div id="fotter">
            <div style="height:30px;margin-bottom:0px; margin-top:25px;float:left; color:#fff; margin-left :250px;">
                Copyright &copy; 2018 kmitltheater.com
            </div>
            <div style="height:30px;float:right;margin-top:20px;margin-right:250px;">
                <a href="https://www.facebook.com/Kmitl-theater-514409159028556/" target="_blank">
                    <img src="facebook.png" style="height: 34px; width: 36px" />
                </a>
                <a href="https://twitter.com/TheaterKmitl" target="_blank">
                    <img src="twittericon.png" style="height: 34px; width: 36px" />
                </a>

                <a href="https://www.instagram.com/kmitltheater/" target="_blank">
                    <img src="ig.png" style="height: 34px; width: 36px" />
                </a>
            </div>

        </div>
    </form>

</body>

</html>