<?php
session_start();
include("../conect.php");

?>

<!DOCTYPE html>
<html>
<head>
    <title>test for internetdevels</title>
    <meta charset="iso-8859-5">


    <link href="/css/main.css" rel="stylesheet" type="text/css">

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
        $id= intval($_POST['id']);
        $result=mysqli_query($conect ,"SELECT * FROM users WHERE id='$id'") or die (mysql_error());
        $data = mysqli_fetch_array($result);


        ?>

        <?php

        echo '<div>
            <form method="post" action="admin/updateUser.php" class ="editCurrentUserFild">
               
                <p><h3>Логін</h3><br><p><textarea name="title" cols="100" rows="2" >'.$data["user"].'</textarea>
                <p><h3>Електронна адреса</h3><br><p><textarea name="m_desk" cols="100" rows="2" >'.$data["email"].' </textarea>
                <p><h3>Дата реєстрації</h3><br>'.date("d.m.y, H:i:s" ,$data["date"]).'
                <p>

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