
 <?php

 class EditeNews{
    function select_from_db($id){
        if(!@file_exists('./conect.php') ) {
            echo 'can not include';
        } else {
            include('./conect.php');
        }
        $result=mysqli_query($conect ,"SELECT * FROM data WHERE id='$id'") or die (mysqli_error());
        $data = mysqli_fetch_array($result);
        return $data;
    }
    function update_db($title, $m_desk, $desk, $id){

            include('../conect.php');
     
        $sql = "UPDATE data SET title = '$title', m_desk='$m_desk' , desk ='$desk' WHERE id =$id";
        $query= mysqli_query($conect, $sql) or die(mysqli_error());
        if($query){
           return true;
        }else{
            mysqli_error();
            }
    }
 }



        ?>

