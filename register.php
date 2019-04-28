<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head id="Head1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>หน้าหลัก</title>
    <link rel="Stylesheet" href="StyleSheet1.css" />
    <link rel="Stylesheet" href="csslogin.css" />
    <link rel="Stylesheet" href="cssregis.css" />
</head>

<body>
    <form id="form1" action="insertRegis.php" method="get">
        <?php include 'nav.php' ?>
        <!--body-->
        <div id="panel">
            <div style="width: 97%; margin-left: 17px;background-color:#f0f0f0;float:left; height:1100px; ">

                <div style="float:left;padding:30px;margin-left:120px;width:70%">
                    <div class="container2">
                        <h1>Register</h1>
                        <p>Please fill in this form to create an account.</p>
                        <hr>

                        <label for="name"><b>Name</b></label>
                        <input type="text" placeholder="Enter Name" name="name" required>

                        <label for="lastname"><b>Lastname</b></label>
                        <input type="text" placeholder="Enter Lastname" name="lastname" required>

                        <label for="tel"><b>Tel</b></label>
                        <input type="text" placeholder="Enter Tel" name="tel" required>

                        <label for="Username"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                        <br><br>

                        <button type="submit" class="registerbtn">Register</button>
                    </div>
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

    </form>

</body>

</html>