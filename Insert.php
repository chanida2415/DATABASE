<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head id="Head1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>หน้าหลัก</title>
    <link rel="Stylesheet" href="StyleSheet1.css" />
    <link rel="Stylesheet" href="csslogin.css" />
    <script src="js/jquery-1.11.0.min.js"></script>

</head>

<body>
    <style>
        table#showMovieList {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            font-size: 13px;
        }

        table#showMovieList td,
        table#showMovieList th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        table#showMovieList tr:nth-child(even) {
            background-color: #dddddd;
        }

    </style>
    <table id="template-tableMovieList" style="display:none;">
        <tbody>
            <tr>
                <td>Island Trading</td>
                <td>Island Trading</td>
                <td>Island Trading</td>
                <td>Island Trading</td>
            </tr>
        </tbody>
    </table>
    <?php include 'nav.php' ?>
    <!--banner-->
    <div style="width:100%; ">
    </div>
    <!--banner-->

    <!--body-->
    <div id="panel">
        <div style="width: 1064px; margin-left: 17px;float:left;background-color:#f0f0f0; height:1100px; ">
            <!--login-->
            <div style=" width:70%; margin-top:80px;float:left;margin-left: 150px; ">
                <font size="10" color="#696969"> INSERT A NEW MOVIE</font>
                <br><br>
                <form id="forminsert" action="storagemovie.php" method="get">
                    <label><b>Name Movie :</b></label>
                    <input type="text" name="nmovie" required><br><br><br>
                    <label><b>Author :</b></label>
                    <input type="text" name="nameauthor" required><br><br><br>
                    <label><b>Date In :</b></label>
                    <input type="date" name="datein"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <label><b>Date Out :</b></label>
                    <input type="date" name="dateout"><br><br><br><br>

                    <button type="submit">Insert</button>
                </form>
            </div>
            <div style=" width:70%; margin-top:80px;float:left;margin-left: 150px; ">
                <font size="10" color="#696969">MOVIE</font>
                <br><br>
                <div style="overflow-y: scroll; height: 326px;">
                    <table id="showMovieList" style="width:100%">
                        <thead>
                            <th>Movie</th>
                            <th>Author</th>
                            <th>DateIN</th>
                            <th>DateOut</th>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
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
    <script>
        $(document).ready(function () {
            $.get("select_movie.php", function (data) {
                var movieList = JSON.parse(data);
                var row = $("#template-tableMovieList").find("tr");
                var tbody = $("#showMovieList").find("tbody");
                for (let i = 0; i < movieList.length; i++) {
                    var addRow = row.clone().show();
                    addRow.find("td:eq(0)").text(movieList[i].m_name);
                    addRow.find("td:eq(1)").text(movieList[i].author);
                    addRow.find("td:eq(2)").text(movieList[i].date_in);
                    addRow.find("td:eq(3)").text(movieList[i].date_out);
                    addRow.insertAfter(tbody);

                }
            });
        });
    </script>
</body>

</html>