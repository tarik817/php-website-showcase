<?php 

	function push_query(){
		include("../conect.php");
		$comment = $_POST['comment'];
		$article_id = $_POST['id_article'];
		$user_name = $_SESSION['session_username'];
		$time= time();
		if(strlen($comment)<150){
			$query = mysqli_query($conect, "INSERT INTO comments(user, comment, article_id, time) VALUES ('$user_name', '$comment', '$article_id', '$time')") or die(mysqli_error());
			if($query == true){
				echo "<html><head><meta http-equiv='Refresh' content='0; URL=../view.php?id=".$article_id."'></head></html>";
			}
		}else{ 
			$comment= mb_substr($comment, 0, 154);
			$position = mb_strrpos($comment, ' ', 'UTF-8');
			$comment= mb_substr($comment, 0, $position);
			$query = mysqli_query($conect, "INSERT INTO comments(user, comment, article_id, time) VALUES ('$user_name', '$comment', '$article_id', '$time')") or die(mysqli_error());
			if($query == true){
				echo "<html><head><meta http-equiv='Refresh' content='0; URL=../view.php?id=".$article_id."'></head></html>";
			}
		}
	}
	function show_coment(){
		
		include("conect.php");
		$query1=mysqli_query($conect ,"SELECT * FROM comments ORDER BY article_id ") or die (mysql_error());

		while($result1 = mysqli_fetch_array($query1)){
			echo'
			<form class = "comments_view">
			<div >
				<div>Користувач: '.$result1["user"].'</div>
				<div>Коментар:<br>'.$result1["comment"].' </div>
				<div>Час додавання коментаря: '.date("d.m.y, H:i:s" ,$result1["time"]).'</div>
				<div class="clr"></div>
			</div>
			</form>';
		}
}
?>