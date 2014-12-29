<?php
session_start();
echo $_SESSION['session_username'];
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
                <li><a href="userView.php">Головна</li>
                <li><a href=#>Зворотній звязок</li>

            </ul>

            <form method="" action="">
                <a href><img src="images/search.png" width= "25" class="search_img"></a>
                <input type="text" name="topsearch" placeholder="Пошук" class="b5radius">

            </form>

        </div>
        <div class="registration">
          <div>
                    
                        <ul class="dropdown">
                            <li class="dropdown-top">
                            <a class="dropdown-top" href="/">Вітаємо </br> <?php echo $_SESSION['session_username'];?></a>
                            <ul class="dropdown-inside">
                            <li><a href="users.php">Перегляд списку користувачів</a></li>
                            <li><a href="/">Редагувати профіль</a></li>
                            <li><a href="/">Вийти!</a></li>
                            </ul>
                            </li>
                </div>





        </div>
    </div>



    <div class="sidebar">
        <div class="sidebar_menu">
            <a href="userView.php">Головна<a>
                <a href="users.php">Користувачі<a>
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
                </div> <br>
                </form>';

        }
        ?>


    </div>
    <div class="footer">
        Тестовий проект для InternetDevels made by Taras Kostiuk (c)


    </div>




    <div class="clr"></div>



</div>

</body>
</html>