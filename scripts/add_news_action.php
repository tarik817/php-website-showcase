 <?php

        if(isset($_POST['addNewsSend'])){
            $title= $_POST['title'];
            $m_desk= $_POST['m_desk'];
            $desk= $_POST['desk'];
            $time= time();
            $query= mysqli_query($conect, "INSERT INTO data (title, m_desk, desk, data)
                VALUES('$title', '$m_desk', '$desk', '$time')") or die(mysqli_error());
            echo "<html><head><meta http-equiv='Refresh' content='0; URL=index.php'></head></html>";

        }

        ?>