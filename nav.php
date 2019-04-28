<div id="menubar">
    <img src="logo2.png" style="float:left ; width:6%; height:100%; margin-left :60px;" />
    <img src="textlogo.png" style="height:90%; margin-left :-70px;" />
    <img src="search.png" style="  height:70%; width:3%;  float:right;margin-right:50px;margin-top:13px; " />
    <input type="text" id="keyword" name="keyword" placeholder=" ค้นหาจาก Keyword" style="height:50%; width:15%;  border-radius:3px; float:right; margin-top:20px; margin-right:5px;  ">

</div>
<div id="bar">
    <a href="index.php"><input class="btnmenu" style="margin-left:240px;" type="button" value="Home" /></a>
    <a href="mainmovies.php"><input class="btnmenu" type="button" value="Movies" /></a>
    <a href="promotion.php"><input class="btnmenu" type="button" value="Promotion" /></a>
    <a href="contact.php"> <input class="btnmenu" type="button" value="Contact Us" /></a>
    <?php
        session_start(); 
        if(isset($_SESSION['name'])) {
            echo '<a href="#"><input class="btnmenu" type="button" value="' . $_SESSION['name'] . ' ' . $_SESSION['surname'] . '"/></a>';
            echo '<a href="logout.php"><input class="btnmenu" type="button" value="Logout"/></a>';
        } else {
            echo '<a href="login.php"> <input class="btnmenu" type="button" value="Login" /></a>';
        }
    ?>
    <!--login-->
</div>