       <?php
        $user= $_SESSION['session_username'];
        $result=mysqli_query($conect ,"SELECT * FROM users WHERE user='$user'") or die (mysql_error());
        $data = mysqli_fetch_array($result);
        $user=$_SESSION['session_username'];


        ?>
        <?php

        echo '<div>
            <form method="post" action="scripts/current_user_controler.php" class="user_data_form" >
                <p><h3>Логін</h3><br></p><p class ="user_data">'.$user.'</p><br>
                <p><h3>Електронна адреса</h3><br></p><p class ="user_data">'.$data["email"].'<br><input  type="submit" name="edite_email" class="updateUser2" value="Редагувати електронну адресу"/></p><br>
                <p><h3>Дата реєстрації</h3><br></p><p class ="user_data">'.date("d.m.y, H:i:s" ,$data["date"]).'</p><br>
                <p><h3>Пароль</h3><br></p>
                <p><input name="currentuserpassword" type="password" value="Редагуватиfdsafsdafasfsdafasdfdsgd"/></p>
                <p><input  type="submit" name="edite_pass" class="updateUser2" value="Редагувати пароль"/></p>
        
             </form>  
            
             </div>';
        ?>s