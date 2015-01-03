<?php
session_start();
include("conect.php");

?>

<!DOCTYPE html>
<html>
<head>
    <title>test for internetdevels</title>
    <meta charset="utf-8">
    <link href="css/main.css" rel="stylesheet" type="text/css">

</head>
<body>



<div id="page_align" class ="b5radius">


    <div id="header" class="b3radius_down">
        <div id="header_nav">
            <ul>
                <li><a href="index.php">Головна</li>
                <li><a href=#>Зворотній звязок</li>

            </ul>

            <form method="" action="">
                <a href><img src="images/search.png" width= "25" class="search_img"></a>
                <input type="text" name="topsearch" placeholder="Пошук" class="b5radius">

            </form>

        </div>
        <div class="registration">
            <div>
                <a  href="login.php">Вхід</a><br>
                <a href="registration.php">Реєстрація</a>
            </div>
            <div>
                <form class = "userfield">
                    <p><select size="" name="">
                            <option>Поточний користувач</option>
                            <option>Перегляд списку користувачів</option>
                            <option>Редагувати профіль</option>

                        </select></p>


                </form>
            </div>


        </div>
    </div>



    <div class="sidebar">
        <div class="sidebar_menu">
            <a href="index.php">Головна<a>
                    <a href="#">Зворотній звязок<a>


        </div>




    </div>
    <div class="content">



       <?php include ("scripts/outletEditNews.php"); ?>




    </div>
    <div class="footer">
        Тестовий проект для InternetDevels made by Taras Kostiuk (c)


    </div>




    <div class="clr"></div>



</div>

</body>
</html>