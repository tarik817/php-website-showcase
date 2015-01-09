 <meta charset="utf-8">
    <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>

<?php
if(!isset($_SESSION)){session_start();}

		echo'
		<div>
            <form method="post" action="scripts/add_news_action.php" >
                <input type="hidden" value= name ="id" >
                <p><h3>Заголовок</h3><br><p><textarea name="title" cols="134" rows="2" ></textarea>
                <p><h3>Короткий опис</h3><br><p><textarea name="m_desk" cols="134" rows="6" ></textarea>
                <p><h3>Повний текст</h3><br><p><textarea name="desk" cols="134" rows="18" ></textarea>
                <input type="submit" name="addNewsSend" id="addNewsSend" value="Додати новину!"/>
             </form>  
             </div>';


?> 

