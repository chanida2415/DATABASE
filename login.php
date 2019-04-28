<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head id="Head1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>หน้าหลัก</title>
    <link rel="Stylesheet" href="StyleSheet1.css" />
    <link rel="Stylesheet" href="csslogin.css" />
</head>

<body>
    <?php include 'nav.php' ?>
    <!--banner-->
    <div style="width:100%; ">
    </div>
    <!--banner-->

    <!--body-->
    <div id="panel">
        <div style="width: 97%; margin-left: 17px;background-color:#f0f0f0;float:left; height:1100px; ">
            <!--login-->
            <div style=" width:70%; margin-top:80px;background-color:#fff;float:left;margin-left: 150px; ">

            </div>
            <div class="imgcontainer">
                <img src="img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <form id="formLogin" action="chklogin.php" method="get">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                    <!-- <asp:Button ID="Button1"  Text="Login" Height="52px" 
                        Width="1029px" /> -->
                    <button type="submit">Login</button>
                </form>
            </div>
            <div class="container" style="background-color:#f1f1f1">
                <label>Do not have an account? <a href="register.php">Sign up</a></label><br>
                <button type="button" class="cancelbtn">Cancel</button>
            </div>
            <!--login-->
        </div>
    </div>
    <!--footter-->
    <div id="fotter">
        <div style="height:30px;margin-bottom:0px; margin-top:25px;float:left; color:#fff; margin-left :280px;">
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

</body>

</html>