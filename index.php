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

        <!--banner-->
        <div style="width:100%; background-color :#1e1f24;">
            <div id="banner">
                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <img src="banner1.png" style="width:100%; height:500px;">

                    </div>

                    <div class="mySlides fade">
                        <img src="banner4.png" style="width:100% ; height:500px;">

                    </div>

                    <div class="mySlides fade">
                        <img src="banner3.png" style="width:100%; height:500px;">

                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>

            </div>
        </div>

        <script>
            var slideIndex = 1;
         showSlides(slideIndex);

         function plusSlides(n) {
             showSlides(slideIndex += n);
         }

         function currentSlide(n) {
             showSlides(slideIndex = n);
         }

         function showSlides(n) {
             var i;
             var slides = document.getElementsByClassName("mySlides");
             var dots = document.getElementsByClassName("dot");
             if (n > slides.length) { slideIndex = 1 }
             if (n < 1) { slideIndex = slides.length }
             for (i = 0; i < slides.length; i++) {
                 slides[i].style.display = "none";
             }
             for (i = 0; i < dots.length; i++) {
                 dots[i].className = dots[i].className.replace(" active", "");
             }
             slides[slideIndex - 1].style.display = "block";
             dots[slideIndex - 1].className += " active";
         }
     </script>
        <!--banner-->

        <!--body-->
        <script>
            function myFunction() {
             alert("Coming Soon");
         }
     </script>
        <div id="panel">
            <div style="width: 97%; margin-left: 17px;background-color:#f0f0f0;float:left; height:920px;">
                <div style="width:100%;float:left;margin-top:10px;"> <img src="Untitled-1.png" /></div>


                <div style=" width: 70%; margin-top:20px;background-color:#fff;float:left;height:832px;">
                    <!--movie-->
                    <div class="movies" style="margin-left:20px;">
                        <a href="movie1.php"><img src="Fantastic_Beasts.png" style="width:100%;height:275px;margin-bottom:5px; " /></a>
                        <a href="catchlogin.php"><img src="buy.PNG" /></a>
                    </div>

                    <!--movie-->
                    <div class="movies">
                        <a href="movie2.php"><img src="Homestay.jpg" style="width:100%;height:275px;margin-bottom:5px;" /></a>
                        <a href="catchlogin.php"><img src="buy.PNG" /></a>
                    </div>

                    <!--movie-->
                    <div class="movies">
                        <a href="movie3.php"><img src="Johnny%20English%203.jpg" style="width:100%;height:275px;margin-bottom:5px;" /></a>
                        <a href="catchlogin.php"><img src="buy.PNG" /></a>
                    </div>

                    <div style="float:left; height:40px;width:90%;margin-left:40px;margin-top:50px;margin-bottom:10px;">
                        <img src="cms.png" style="height:50px;">
                    </div>

                    <!--movie-->
                    <div class="movies" style="margin-left:20px; ">
                        <a href="movie4.php"><img src="nakee2.jpg" style="width:100%;height:275px;margin-bottom:5px;" /></a>
                        <img src="buy.PNG" onclick="myFunction()" />
                    </div>

                    <!--movie-->
                    <div class="movies" >
                        <a href="movie5.php"><img src="Suspiria.jpg" style="width:100%;height:275px;margin-bottom:5px;" /></a>
                        <img src="buy.PNG" onclick="myFunction()" />
                    </div>

                    <!--movie-->
                    <div class="movies" >
                        <a href="movie6.php"><img src="first_man_review.jpg" style="width :100%;height:275px;margin-bottom:5px;" /></a>
                        <img src="buy.PNG" onclick="myFunction()" />
                    </div>

                    <!--movie-->
                    <div style="width:747px;height:50px;margin-top:40px;float:left;">
                        <a href="mainmovies.php"><input class="btnmovie" type="button" value="ภาพยนตร์ทั้งหมด" /></a>
                    </div>

                </div>

                <!---------------------------------------------facebook-------------------------------->
                <div style="margin-top:20px;background-color:#fff;float:left;width:30%;">
                    <img src="face.PNG" />
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FKmitl-theater-514409159028556%2F&tabs=timeline&width=315&height=750&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                        width="315" height="750" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowTransparency="true" allow="encrypted-media">
                    </iframe>
                </div>

            </div>

        </div>


        <!--------------------------------------------footter---------------------------------------------->
        <div id="fotter">
            <div style="height:30px;margin-top:25px; float:left; color:#fff; margin-left :280px;">
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