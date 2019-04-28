<?php 

include 'config.php';
include 'classes/DB.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head id="Head1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking</title>
    <link rel="Stylesheet" href="StyleSheet1.css" />
    <link rel="Stylesheet" href="csslogin.css" />
    <link rel="Stylesheet" href="cssregis.css" />
</head>

<body>
    <!--<form id="form1" >-->
    <?php include 'nav.php' ?>
    <!--body-->

    <div id="panel">
        <div style="width: 97%; margin-left: 17px;float:left; height:1100px; ">

            <div style=" width: 100%; margin-top:20px;float:left;height:801px;">

                <!--time_Fantastic_Beasts-->
                <div class="bookm">
                    <div class="bookm1"><img src="Fantastic_Beasts.png" style="height:275px;" /></div>
                    <div class="bookm2">

                        <form action="seatbooking.php" method="get" name="fantasticbeasts">
                            <h1>Fantastic Beasts 2<input id="nameInput" name="nameMovie" value="FantasticBeasts2" type="hidden" /></h1>
                            <p>&nbsp;</p>

                            <p style="color:#fff;">Time: 2 hr 14 min&nbsp;&nbsp; Theater 1
                                <input id="Hidden4" name="Theater" value="Theater1" type="hidden" />
                            </p>
                            <input type="hidden" class="getIMG" name="getimg" value="Fantastic_Beasts.png"/>
                            <select name="time" style="color:#fff;width: 160px;margin-right:40px;height:30px; border-radius:5px 5px 5px 5px; background-color:#000; ">
                                <option value="12:10">&nbsp;&nbsp;&nbsp;12:10</option>
                                <option value="15:10">&nbsp;&nbsp;&nbsp;15:10</option>
                                <option value="18:10">&nbsp;&nbsp;&nbsp;18:10</option>
                            </select>
                            <input class="btntime" type="submit" id="btntime1" value="Enter" />

                        </form>

                    </div>
                </div>
                <!--time_Fantastic_Beasts-->

                <!--time_Homestay-->
                <div class="bookm">
                    <div class="bookm1"><img src="Homestay.jpg" style="height:275px;" /></div>
                    <div class="bookm2">

                        <form action="seatbooking.php" method="get" name="HomeStay">
                            <h1>Home Stay<input id="Hidden2" name="nameMovie" value="Home Stay" type="hidden" /></h1>
                            <p>&nbsp;</p>

                            <p style="color:#fff;">Time: 2 hr 01 min&nbsp; Theater 2
                                <input id="Hidden5" name="Theater" value="Theater2" type="hidden" />
                            </p>
                            <input type="hidden" class="getIMG" value="Homestay.jpg" name="getimg"/>
                            <select name="time" style="color:#fff;width: 160px;margin-right:40px;height:30px; border-radius:5px 5px 5px 5px; background-color:#000; ">
                                <option value="14:30">&nbsp;&nbsp;&nbsp;14:30</option>
                                <option value="17:30">&nbsp;&nbsp;&nbsp;17:30</option>
                                <option value="20:30">&nbsp;&nbsp;&nbsp;20:30</option>
                            </select>
                            <input class="btntime" type="submit" id="Submit2" value="Enter" />
                        </form>

                    </div>
                </div>
                <!--time_Homestay-->

                <!--time_Johnny-->
                <div class="bookm">
                    <div class="bookm1"><img src="Johnny%20English%203.jpg" style="height:275px;" /></div>
                    <div class="bookm2">

                        <form action="seatbooking.php" method="get" name="JohnnyEnglish3">
                            <h1>Johnny English 3</h1><input id="Hidden1" name="nameMovie" value="Johnny English 3" type="hidden" />
                            <p>&nbsp;</p>
                            <p style="color:#fff;">Time: 1 hr 29 min&nbsp;&nbsp;&nbsp; Theater 3
                                <input id="Hidden6" name="Theater" value="Theater3" type="hidden" />
                            </p>
                            <input type="hidden" class="getIMG" name="getimg" value="Johnny%20English%203.jpg"/>
                            <select name="time" style="color:#fff;width: 160px;margin-right:40px;height:30px; border-radius:5px 5px 5px 5px; background-color:#000; ">
                                <option value="11:00">&nbsp;&nbsp;&nbsp;11:00</option>
                                <option value="15:00">&nbsp;&nbsp;&nbsp;15:00</option>
                                <option value="18:00">&nbsp;&nbsp;&nbsp;18:00</option>
                            </select>
                            <input class="btntime" type="submit" id="Submit3" value="Enter" />
                        </form>

                    </div>
                </div>
                <!--time_Johnny-->
            </div>
        </div>
    </div>
    <!--footter-->
    <div id="fotter">
        <div style="height:30px;margin-bottom:0px; margin-top:25px;float:left; color:#fff; margin-left :280px;">
            Copyright &copy; 2018 kmitltheater.com
        </div>
        <div style="height:30px;float:right;margin-top:20px;margin-right:250px;">
            <a href="https://www.facebook.com/Kmitl-theater-514409159028556/" target="_blank"><img src="facebook.png"
                    style="height: 34px; width: 36px" /></a>
            <a href="https://twitter.com/TheaterKmitl" target="_blank"><img src="twittericon.png" style="height: 34px; width: 36px" /></a>
            <a href="https://www.instagram.com/kmitltheater/" target="_blank"><img src="ig.png" style="height: 34px; width: 36px" /></a>
        </div>

    </div>

    <!-- </form>-->

</body>

</html>