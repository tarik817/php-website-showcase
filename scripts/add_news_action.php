<meta charset="utf-8">
 <?php

if(!isset($_SESSION)){session_start();}
include("../conect.php");
        if(isset($_POST['addNewsSend'])){
            $title= $_POST['title'];
            $m_desk= $_POST['m_desk'];
            $desk= $_POST['desk'];
            $author = $_SESSION['session_username'];
            $time= time();
            $query = mysqli_query($conect, "INSERT INTO data(title, m_desk, desk, data, author) VALUES ('$title', '$m_desk', '$desk', '$time', '$author')") or die(mysqli_error());
            echo "<html><head><meta http-equiv='Refresh' content='0; URL=../index.php'></head></html>";

        }

        ?>