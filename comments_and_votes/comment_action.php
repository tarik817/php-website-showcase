<?php 
session_start();
include("../conect.php");

$comment = $_POST['comment'];
$user_name = $_SESSION['session_username'];

if(isset($_POST['send'])){
	echo "$comment";
	$q1 = mysqli_query($conect, "INSERT INTO comments(user, comment) VALUES ('$user_name', '$comment')") or die(mysqli_error());
}


?>