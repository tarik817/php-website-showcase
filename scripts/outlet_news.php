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
                <div class=""><p>Автор публікації '.$data["author"].'</p></div>
                <div class="clr"></div>';
                if(isset($_SESSION['session_username'])){
                    if($_SESSION['session_username']==$data["author"]){
                        echo '<a href ="edit_news_page.php?id='.$data["id"].'">Редагувати</a>';
                    }
                }

                if(isset($_SESSION['session_username'])){
                    include("comments_and_votes/vote.php");

                }
                include("comments_and_votes/comment_action.php");
                show_coment();


           
                if(isset($_SESSION['session_username'])){
                    include("comments_and_votes/comment.php");
                }
?>