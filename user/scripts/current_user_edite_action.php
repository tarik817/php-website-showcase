<?php 
Class UserUpdate {
    function update_user_email($email, $user){
        include("../../conect.php");
        $sql = "UPDATE users SET email = '$email' WHERE user ='$user'";
        $query= mysqli_query($conect, $sql) or die(mysqli_error());
                 if($query){
                 return true;
                }else{
                   return false;
                }
    }
    function update_user_pass($password, $user){
        include("../../conect.php");
        $password = md5($password);
        $sql = "UPDATE users SET password = '$password' WHERE user ='$user'";
        $query= mysqli_query($conect, $sql) or die(mysqli_error());
                 if($query){
                 return true;
                }else{
                   return false;
                }
    }
    function check_pass($password, $user){
        include("../../conect.php");
        $query= mysqli_query ($conect, "SELECT * FROM users WHERE user = '$user'") or die (mysqli_error());
        $user_data= mysqli_fetch_array($query);
            if($user_data['password']== md5($password)){
                return true;
            }
            else{
                exit("error");
            }
    }


}
?>