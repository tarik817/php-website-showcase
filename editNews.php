<?php
session_start();
include("conect.php");

?>

<!DOCTYPE html>
<html>
<head>
    <title>test for internetdevels</title>
    <meta charset="utf-8">

    <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
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



        <?php
        $id= intval($_GET['id']);
        $result=mysqli_query($conect ,"SELECT * FROM data WHERE id='$id'") or die (mysql_error());
        $data = mysqli_fetch_array($result);


        ?>

        <?php

        echo '<div>
            <form method="post" action="admin/updateNews.php" >
                <input type="hidden" value='.$data["id"].' name ="id" >
                <p><h3>Заголовок</h3><br><p><textarea name="title" cols="134" rows="2" >'.$data["title"].'</textarea>
                <p><h3>Заголовок</h3><br><p><textarea name="m_desk" cols="134" rows="6" >'.$data["m_desk"].' </textarea>
                <p><h3>Заголовок</h3><br><p><textarea name="desk" cols="134" rows="18" >'.$data["desk"].'</textarea>
                <input type="submit" name="addNewsSend" id="addNewsSend" value="Редагувати"/>
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