<?php
if(isset($_POST['edite_email'])){
echo "<html><head><meta http-equiv='Refresh' content='0; URL=../edite_email_form.php'></head></html>";
}elseif(isset($_POST['edite_pass'])){
echo "<html><head><meta http-equiv='Refresh' content='0; URL=../edite_pass_form.php'></head></html>";
}else{
 exit("error");
}

?>