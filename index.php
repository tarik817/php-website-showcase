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
                <?php if(isset($_SESSION['session_username'])){?>
                <li><a href="add_news_page.php">Додати статтю</li>
                <?php } ?>
                <li><a href=#>Зворотній звязок</li>

            </ul>

            <form method="" action="">
                <a href><img src="images/search.png" width= "25" class="search_img"></a>
                <input type="text" name="topsearch" placeholder="Пошук" class="b5radius">

            </form>

        </div>
        <div class="registration">
            <?php if(isset($_SESSION['session_username'])){
                include("authentification/show_user_menu.php");
                include("scripts/exit_view.php");

            }
            elseif(isset($_SESSION['session_admin'])){
                 include("scripts/exit_view.php");
            }
             ?>


            <?php if(!isset($_SESSION['session_username'])){ ?>
            <div class ="log_relation">
                <a  href="authentification/login.php" class = "log1 b5radius">Вхід</a><br><br>
                <a href="authentification/registration.php" class = "log b5radius">Реєстрація</a>
            </div>
            <?php
            }
             ?>






        </div>
    </div>



    <div class="sidebar">
        <div class="sidebar_menu">
            <a href="index.php">Головна</a>
            <?php if(isset($_SESSION['session_username'])){?>
             <a href="add_news_page.php">Додати статтю</a>
                <?php } ?>
            <a href="#">Зворотній звязок</a>


        </div>




    </div>
    <div class="content">
        <?php
       include("scripts/index_action.php")
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