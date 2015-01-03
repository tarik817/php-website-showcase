     <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
 <?php
        $id= intval($_GET['id']);
        $result=mysqli_query($conect ,"SELECT * FROM data WHERE id='$id'") or die (mysqli_error());
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