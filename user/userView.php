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
                <li><a href=#>Зворотній звязок</li>

            </ul>

            <form method="" action="">
                <a href><img src="../images/search.png" width= "25" class="search_img"></a>
                <input type="text" name="topsearch" placeholder="Пошук" class="b5radius">

            </form>

        </div>
        <div class="registration">
            <?php if(isset($_SESSION['session_username'])){
                include("../authentification/show_user_menu.php");
                include("../scripts/exit_view.php");

            }
            if(isset($_SESSION['session_admin'])){
                 include("../scripts/exit_view.php");
            }
             ?>


            <?php if(!isset($_SESSION['session_username'])){ ?>
            <div class ="log_relation">
                <a  href="../authentification/login.php" class = "log1 b5radius">Вхід</a><br><br>
                <a href="../authentification/registration.php" class = "log b5radius">Реєстрація</a>
            </div>
            <?php
            }
             ?>






        </div>
    </div>

    <div class="sidebar">
        <div class="sidebar_menu">
            <a href="../index.php">Головна<a>
                    <a href="#">Зворотній звязок<a>


        </div>




    </div>
    <div class="content">



        <?php
        $id= intval($_POST['id']);
        $result=mysqli_query($conect ,"SELECT * FROM users WHERE id='$id'") or die (mysql_error());
        $data = mysqli_fetch_array($result);


        ?>

        <?php

        echo '<div>
            <form method="post" action="admin/updateUser.php" >
               
                <p><h3>Логін</h3><br><p><textarea name="title" cols="134" rows="2" >'.$data["user"].'</textarea>
                <p><h3>Електронна адреса</h3><br><p><textarea name="m_desk" cols="134" rows="6" >'.$data["email"].' </textarea>
                <p><h3>Дата реєстрації</h3><br><p><textarea name="desk" cols="134" rows="18" >'.date("d.m.y, H:i:s" ,$data["date"]).'</textarea>
                <input type="submit" name="updateUser" id="addNewsSend" value="Редагувати"/>
             </form>  
             </div>';
        ?>




    </div>
    <div class="footer">
        Тестовий проект для InternetDevels made by Taras Kostiuk (c)


    </div>




    <div class="clr"></div>



</div>

</body>
</html>