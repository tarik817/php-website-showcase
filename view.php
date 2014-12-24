<?php
session_start();
include("conect.php");

?>

<!DOCTYPE html>
<html>
<head>
    <title>test for internetdevels</title>
    <meta charset="utf-8">
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
        if(!isset($_GET["id"])){
            $id=1;

        }else{
            $id=$_GET["id"];
        }
        $result=mysqli_query($conect ,"SELECT * FROM data WHERE id='$id'") or die (mysql_error());
        $data= mysqli_fetch_array($result);

        echo '<div class="article_title"><h2>'.$data["title"].'<h2></div>
                <div class="desk_view"><p>'.$data["desk"].'</p></div>
                <div class="data"><p>Дата створення новини '.date("d.m.y, H:i:s" ,$data["data"]).'</p></div>
                <a  href="admin/deleteNews.php?id='.$data["id"].'" >Видалити</a>
                <div class="clr"></div>';

        ?>


    </div>
    <div class="footer">
        Тестовий проект для InternetDevels made by Taras Kostiuk (c)


    </div>




    <div class="clr"></div>



</div>

</body>
</html>