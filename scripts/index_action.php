<?php
        $result=mysqli_query($conect ,"SELECT * FROM data ") or die (mysql_error());
        while($data= mysqli_fetch_array($result)){
            echo '<div class="article">
                        <img src="images\logo2.png" />
                        <div class="article_title"><h2>'.$data["title"].'<h2></div>
                        <div class="desk_view"><p>'.$data["m_desk"].'</p></div>
                        <div class="clr"></div>
                    
                 <div class="data"><p>Дата додавання новини '.date("d.m.y, H:i:s" ,$data["data"]).'</p></div>
                 <div class=""><p>Автор публікації: '.$data["author"].'</p></div>
                 <a class="button" href="view.php?id='.$data["id"].'">Перегляд матеріалу</a>
                ';
                if(isset($_SESSION['session_username'])){
                    if($_SESSION['session_username']==$data["author"]){
                        echo '<a href ="edit_news_page.php?id='.$data["id"].'">Редагувати  </a>';
                        echo '<a href ="scripts/delete_news.php?id='.$data["id"].'">Видалити</a>';
                    }
                }

               echo "</div>"; 
              

        }
    
        ?>