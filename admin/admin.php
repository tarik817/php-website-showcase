<?php
session_start();
include("../conect.php");

?>

<!DOCTYPE html>
<html>
<head>
    <title>test for internetdevels</title>
    <meta charset="utf-8">
    <link href="../css/main.css" rel="stylesheet" type="text/css">
</head>
<body>



<div id="page_align" class ="b5radius">


    <div id="header" class="b3radius_down">
        <div id="header_nav">
            <ul>
                <li><a href="../index.php">Головна</li>
                <li><a href="../addNews.php">Сторінка створення матеріалу</li>
                <li><a href="users.php">Користувачі</li>
                <li><a href=#>Зворотній звязок</li>

            </ul>

            <form method="" action="">
                <a href><img src="../images/search.png" width= "25" class="search_img"></a>
                <input type="text" name="topsearch" placeholder="Пошук" class="b5radius">

            </form>

        </div>
        <div class="registration">
            <?php
            include("../registration.php");
            include("../login.php");
            ?>




        </div>
    </div>



    <div class="sidebar">
        <div class="sidebar_menu">
            <a href="index.php">Головна<a>
                    <a href="addNews.php">Сторінка створення матеріалу<a>
                            <a href="users.php">Користувачі<a>
                                    <a href="#">Зворотній звязок<a>


        </div>




    </div>
    <div class="content">
        <?php
        //скрипт перегляду скорочених версій сторніок


        $result=mysqli_query($conect ,"SELECT * FROM data ") or die (mysql_error());
        $i=count($result);
        while($data= mysqli_fetch_array($result)){

            echo '<div class="article">
                    <a  href="#" /><img src="images\logo2.png" />
                <div class="article_title"><h2>'.$data["title"].'<h2></div>
                <div class="desk_view"><p>'.$data["m_desk"].'</p></div>

                <div class="clr"></div>
                <a  href="view.php?id='.$data["id"].'">Перегляд матеріалу</a>
                    <a  href="editNews.php?id='.$data["id"].'" >Редагувати</a>
                    <a  href="#" >Коментувати</a>
                    <a  href="admin/deleteNews.php?id='.$data["id"].'" >Видалити</a>
                    <div class="data"><p>Дата додавання новини '.date("d.m.y, H:i:s" ,$data["data"]).'</p></div></div>';
        }
        ?>


    </div>
<div class="footer">
        <div class="footer_adm">
            <a href="admin/adminLogin.php" class = "log2 b5radius">Вхід в панель адміністаратора</a>
        </div>

        <div class="footer_text">
            Тестовий проект для InternetDevels made by Taras Kostiuk (c)
        </div>
        <div class="clr"></div>

    </div>




    <div class="clr"></div>



</div>

</body>
</html>