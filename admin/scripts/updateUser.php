<?php
session_start();
echo session_name();
include("../conect.php");


                $id = intval($_POST['id']);
                $title= $_POST['title'];
                $m_desk= $_POST['m_desk'];
                $desk= $_POST['desk'];
    
                $sql = "UPDATE data SET title = '$title', m_desk='$m_desk' , desk ='$desk' WHERE id =$id";
                
   
    $query= mysqli_query($conect, $sql) or die(mysqli_error());
                 if($query){
                 echo "<html><head><meta http-equiv='Refresh' content='0; URL=../index.php'></head></html>";
                }else{
                    mysqli_error();
                }
            

?>