<?php
session_start();
include("../conect.php");

?>

<!DOCTYPE html>
<html>
<head>
    <title>test for internetdevels</title>
    <meta charset="iso-8859-5">
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
                <a href><img src="images/search.png" width= "25" class="search_img"></a>
                <input type="text" name="topsearch" placeholder="Пошук" class="b5radius">

            </form>

        </div>
        <div class="registration">
            <div>
                <a  href="../login.php">Вхід</a><br>
                <a href="../registration.php">Реєстрація</a>
            </div>





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


        $result=mysqli_query($conect ,"SELECT * FROM users") or die (mysql_error());
        while($data= mysqli_fetch_array($result)){


            echo '
                <form method="post" action="editCurrentUser.php" >
                <input type="hidden" value='.$data["id"].' name ="id" >

                
               <div class = "viewUsers"> 
               <a href="#">
               <h5>Логін</h5> '." ".$data["user"]." ".'
               <h5>Електронна пошта</h5> '." ".$data["email"]." ".'
               <h5>Дата реєстрації</h5>'." ".date("d.m.y, H:i:s" ,$data["date"]).'</a>
               </br>
               <input type="submit" name="viewUser" id="addNewsSend" value="Редагувати"/>
                </div> <br>
                </form>';

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