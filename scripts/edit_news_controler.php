<?php 
if (isset($_POST['addNewsUpdate'])) {
	include("edit_news_action.php");
	$v= new EditNews();
	$a=$v->update_db($_POST['title'], $_POST['m_desk'], $_POST['desk'], $_POST['id']);
	if($a==true){
		echo "<html><head><meta http-equiv='Refresh' content='0; URL=../view.php?id=".$_POST['id']."'></head></html>";
	}

}

?>