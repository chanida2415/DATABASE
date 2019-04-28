<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head id="Head1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking</title>
    <link rel="Stylesheet" href="StyleSheet1.css" />
    <link rel="Stylesheet" href="csslogin.css" />
    <link rel="Stylesheet" href="cssregis.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Movie Ticket Booking Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //for-mobile-apps -->
    <link href='//fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/jquery.seat-charts.js"></script>
</head>

<body>
    <!-- <form id="form1"  > -->
    <?php include 'nav.php' ?>


    <!--body-->

    <div id="panel">
        <div style="width: 97%; margin-left: 17px;float:left; height:1000px;">


            <div class="content">
                <h1>Movie Ticket Booking</h1>
                <div class="main">
                    <h2>Multiplex Theatre Showing Screen 1</h2>
                    <div class="demo">
                        <div id="seat-map">
                            <div class="front">SCREEN</div>
                        </div>

                        <!--show detail booking-->
                        <div class="booking-details">
                            <ul class="book-left">
                                <li>Movie </li>
                                <li>Theater </li>
                                <li>Time </li>
                                <li>Tickets</li>
                                <li>Total</li>
                                <li>Seats :</li>
                            </ul>

                            <!--show detail booking-->
                            <form method="get" action="insertBooking.php" name="form1" id="formSum">
                                <ul class="book-right">

                                    <li>:
                                        <?php echo $_GET["nameMovie"]?>
                                        <input id="titleInput" name="nameMovie" value="<?php echo $_GET["nameMovie"]?>" type="hidden"/>
                                    </li>

                                    <li>:
                                        <?php echo $_GET["Theater"]?>
                                        <input id="Theaterinput" name="Theater" value="<?php echo $_GET["Theater"] ?>" type="hidden"/>
                                    </li>

                                    <li>:
                                        <?php echo $_GET["time"] ?>
                                        <input id="timeInput" name="time" value="<?php echo $_GET["time"] ?>" type="hidden"/>
                                    </li>

                                    <li>: <span id="counter">0</span></li>

                                    <li>: 
                                        <b><i>฿</i><span id="total">0</span></b> 
                                        <input id="getImg" name="getimg" type="hidden" value="<?php echo $_GET["getimg"] ?>"/>
                                        <input id="sumInput" name="sum" type="hidden" />
                                    </li>

                                </ul>
                                <div class="clear"></div>
                                <ul class="book-center">
                                    <li><span id="selected-seats" class="scrollbar scrollbar1"></span>
                                        <input id="seatInput" name="seat" type="hidden"/>
                                    </li>
                                </ul>
                                <button class="checkout-button" type="submit">Book Now</button>
                            </form>
                            <!--show detail booking-->

                            <div id="legend"></div>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var price = 200; //price
        $(document).ready(function () {




            var $cart = $('#selected-seats'), //Sitting Area
                $counter = $('#counter'), //Votes
                $total = $('#total'); //Total money


            var sc = $('#seat-map').seatCharts({
                map: [ //Seating chart
                    'aaaaaaaaaa',
                    'aaaaaaaaaa',
                    '________',
                    'aaaaaaaaaa',
                    'aaaaaaaa__',
                    'aaaaaaaaaa',
                    'aaaaaaaaaa',
                    'aaaaaaaaaa',
                    'aaaaaaaaaa',
                    '_aaaaaa_'
                ],
                naming: {
                    top: false,
                    getLabel: function (character, row, column) {
                        return column;
                    }
                },
                legend: { //Definition legend
                    node: $('#legend'),
                    items: [
                        ['a', 'available', 'Available'],
                        ['a', 'unavailable', 'Sold'],
                        ['a', 'selected', 'Selected']
                    ]
                },
                click: function () { //Click event
                    if (this.status() == 'available') { //optional seat
                        $('  <a>R' + (this.settings.row + 1) + 'S' + this.settings.label + ' </a>')
                            .attr('id', 'cart-item-' + this.settings.id)
                            .data('seatId', this.settings.id)
                            .appendTo($cart);

                        $("#seatInput").val($("#selected-seats").text());

                        $counter.text(sc.find('selected').length + 1);
                        $total.text(recalculateTotal(sc) + price);
                        $("#sumInput").val(recalculateTotal(sc) + price);
                        //alert("1");
                        return 'selected';
                    } else if (this.status() == 'selected') { //Checked
                        //alert("2");
                        //Update Number
                        $counter.text(sc.find('selected').length - 1);
                        //update totalnum
                        $total.text(recalculateTotal(sc) - price);
                        //Delete reservation
                        $('#cart-item-' + this.settings.id).remove();
                        $("#seatInput").val($("#selected-seats").text());
                        //optional
                        return 'available';
                    } else if (this.status() == 'unavailable') { //sold
                        //alert("3");
                        return 'unavailable';
                    } else {
                        //alert("4");
                        return this.style();
                    }
                }
            });
            //sold seat
            var m_name = $('#titleInput').val();
            var t_no = $('#Theaterinput').val();
            var time = $('#timeInput').val();
            $.get("select_seat.php?nameMovie="+m_name+"&Theater="+t_no+"&time="+time , function (data) {
                var seatList = JSON.parse(data);
                for (let i = 0; i < seatList.length; i++) {
                    var seat_position = seatList[i].position.match(/\d/g);
                    console.log(seat_position);
                    if(seat_position[2] != null) { 
                        sc.get([seat_position[0]+"_"+seat_position[1]+seat_position[2]]).status('unavailable');
                    } else {
                        sc.get([seat_position[0]+"_"+seat_position[1]]).status('unavailable');
                    }
                }
            });   
        });
        //sum total money
        function recalculateTotal(sc) {
            var total = 0;
            sc.find('selected').each(function () {
                total += price;
            });

            return total;
        }
    </script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>



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


    <!--</form> -->

</body>

</html>