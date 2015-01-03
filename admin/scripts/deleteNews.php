<?php
include("../conect.php");
$id=$_GET['id'];
if(is_numeric($id)){
	$query= mysqli_query($conect, "DELETE FROM data WHERE id = '$id'") or die(mysqli_error());

	if($query == true){
		 echo "<html><head><meta http-equiv='Refresh' content='0; URL=../index.php'></head></html>";
	}

}

?>