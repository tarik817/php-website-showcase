<?php 
if(!isset($_SESSION)) { 
 session_start(); 
    } 
class Vote{
function push_vote($vote, $user, $article_id){
	include("../conect.php");
//перевірка наявності коментаря від поточного користувача
	$q=mysqli_query($conect ,"SELECT * FROM votes WHERE user ='$user' AND article_id = '$article_id'") or die (mysql_error());
	$resulte=mysqli_fetch_array($q);
//запис оцінки користувача в БД
	if($resulte['id'] ==0 or $q==false){
		$q2 = mysqli_query($conect, "INSERT INTO votes(user, article_id, vote_rating) VALUES ('$user', '$article_id', '$vote')") or die (mysql_error());
			return $vote;
		}else{
			return false;
		}
		
}
function is_vote($article_id){
	include("conect.php");
	$user = $_SESSION['session_username'];

	$q2=mysqli_query($conect ,"SELECT * FROM votes WHERE user ='$user' and article_id = '$article_id'") or die (mysqli_error());
	$resulte2=mysqli_fetch_array($q2);
	$vote_rating =$resulte2['vote_rating'];
	if($resulte2['vote_rating']!=0){
		return $vote_rating;
	}else{
		return false;
	}
}
function vote_rating($article_id){
	$sum = 0.0;
	$counter=0;
	include("conect.php");
	$q3=mysqli_query($conect ,"SELECT * FROM votes WHERE article_id ='$article_id'") or die (mysqli_error());
	while($resulte3=mysqli_fetch_array($q3)){
		$resulte3=$resulte3['vote_rating'];

		$sum += $resulte3;
		$counter++;
		}
	$sum= $sum/$counter;
	$sum= mb_substr($sum, 0, 15);
	$position = mb_strrpos($sum, '.', 'UTF-8');
	echo "$position";
	$sum= mb_substr($sum, 0, $position+2);
	return $sum;
}
function delete_vote($user, $article_id){
	include("../conect.php");
//Видалення з бази даних оцінки користувача, в поточній статті
	$q_d=mysqli_query($conect ,"DELETE FROM votes WHERE user ='$user' AND article_id = '$article_id'") or die (mysqli_error());
	if($q_d){
		return true;
		}
}
}
?>
