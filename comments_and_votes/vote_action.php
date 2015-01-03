<?php 

function check_and_push_vote(){
	include("../conect.php");
	$vote = $_POST['vote'];
	$user = $_SESSION['session_username'];
	$article_id = $_POST['article_id'];


	$q=mysqli_query($conect ,"SELECT * FROM votes WHERE user ='$user'AND article_id = '$article_id'") or die (mysql_error());
	$resulte=mysqli_fetch_array($q);

	if($resulte['id'] ==0 or $q==false){
		$q2 = mysqli_query($conect, "INSERT INTO votes(user, article_id, vote_rating) VALUES ('$user', '$article_id', '$vote')") or die (mysql_error());
			if($q2){
				echo "<html><head><meta http-equiv='Refresh' content='0; URL=../view.php?id=".$article_id."'></head></html>";
			}

		}
}

?>