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
                <li><a href="addNews.php">Сторінка створення матеріалу</li>
                <li><a href=#>Зворотній звязок</li>

            </ul>

            <form method="" action="">
                <a href><img src="images/search.png" width= "25" class="search_img"></a>
                <input type="text" name="topsearch" placeholder="Пошук" class="b5radius">

            </form>

        </div>
        <div class="registration">
            <div>
                <form class = "userfield" >
                    <p><select size="" name="" class="usermenu b5radius">
                            <option>Поточний користувач</option>
                            <option>Перегляд списку користувачів</option>
                            <option>Редагувати профіль</option>

                        </select></p>


                </form>
            </div>
            <div>
                <a  href="login.php" class = "log1 b5radius">Вхід</a><br><br>
                <a href="registration.php" class = "log b5radius">Реєстрація</a>
            </div>





        </div>
    </div>
    <div class="sidebar">
        <div class="sidebar_menu">
            <a href="index.php">Головна<a>
                    <a href="addNews.php">Сторінка створення матеріалу<a>
                            <a href="#">Зворотній звязок<a>


        </div>




    </div>
    <div class="content">



        <?php

        if(isset($_POST['addNewsSend'])){
            $title= $_POST['title'];
            $m_desk= $_POST['m_desk'];
            $desk= $_POST['desk'];
            $time= time();
            $query= mysqli_query($conect, "INSERT INTO data (title, m_desk, desk, data)
                VALUES('$title', '$m_desk', '$desk', '$time')") or die(mysqli_error());
            echo "<html><head><meta http-equiv='Refresh' content='0; URL=index.php'></head></html>";

        }

        ?>
        <form method='post' action="addNews.php" >
            <p><h3>Загаоловок</h3><br><input type="text" name="title" size="135"/></p>
            <p><h3>Короткий опис</h3><br><p><textarea name="m_desk" cols="134" rows="5"></textarea></p></p>
            <p><h3>Повний текст</h3><br><br><p><textarea name="desk" cols="134" rows="15"></textarea></p></p>
            <input type="submit" name="addNewsSend" id="addNewsSend" value="Готово"/>


        </form>



    </div>
    <div class="footer">
        Тестовий проект для InternetDevels made by Taras Kostiuk (c)


    </div>




    <div class="clr"></div>



</div>

</body>
</html>