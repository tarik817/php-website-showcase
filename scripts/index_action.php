<?php



        $result=mysqli_query($conect ,"SELECT * FROM data ") or die (mysql_error());
        
        while($data= mysqli_fetch_array($result)){

            echo '<div class="article">
                    <a  href="#" /><img src="images\logo2.png" />
                        <div class="article_title"><h2>'.$data["title"].'<h2></div>
                        <div class="desk_view"><p>'.$data["m_desk"].'</p></div>
                        <div class="clr"></div>
                    
                 <div class="data"><p>Дата додавання новини '.date("d.m.y, H:i:s" ,$data["data"]).'</p></div>
                 <a class="button" href="view.php?id='.$data["id"].'">Перегляд матеріалу</a>

                ';

                
               echo "</div>"; 
        }
    
        ?>