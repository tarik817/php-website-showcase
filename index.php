<?php
session_start();
include("conect.php");
echo session_name();

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
                    <a href="#">Зворотній звязок<a>


        </div>




    </div>
    <div class="content">
        <?php
        //скрипт перегляду скорочених версій сторніок

//Проблема в відображенні
        $result=mysqli_query($conect ,"SELECT * FROM data ") or die (mysql_error());
       
        while($data= mysqli_fetch_array($result)){

            echo '<div class="article">
                    <a  href="#" /><img src="images\logo2.png" />
                <div class="article_title"><h2>'.$data["title"].'<h2></div>
                <div class="desk_view"><p>'.$data["m_desk"].'</p></div>
                <a  href="view.php?id='.$data["id"].'">Перегляд матеріалу</a>
                    <a  href="#" >Коментувати</a>
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