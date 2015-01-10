<?php
include("scripts/edit_news_action.php");
$v = new EditeNews();
$data=$v->select_from_db($_GET['id']);
        echo '<div>
            <form method="post" action="scripts/edit_news_controler.php" >
                <input type="hidden" value='.$data["id"].' name ="id" >
                <p><h3>Заголовок</h3><br><p><textarea name="title" cols="134" rows="2" >'.$data["title"].'</textarea>
                <p><h3>Заголовок</h3><br><p><textarea name="m_desk" cols="134" rows="6" >'.$data["m_desk"].' </textarea>
                <p><h3>Заголовок</h3><br><p><textarea name="desk" cols="134" rows="18" >'.$data["desk"].'</textarea>
                <input type="submit" name="addNewsUpdate" value="Редагувати"/>
             </form>  
             </div>';
?>