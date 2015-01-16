<?php
        $result=mysqli_query($conect ,"SELECT * FROM users") or die (mysql_error());
        while($data= mysqli_fetch_array($result)){


            echo '
                <form method="post" action="editCurrentUser.php" >
                <input type="hidden" value='.$data["id"].' name ="id" >

                
               <div class = "viewUsers"> 
               <a href="#">
               <h5>Логін</h5> '." ".$data["user"]." ".'
               <h5>Електронна пошта</h5> '." ".$data["email"]." ".'
               <h5>Дата реєстрації</h5>'." ".date("d.m.y, H:i:s" ,$data["date"]).'</a>
                </div> <br>
                </form>';

        }
?>