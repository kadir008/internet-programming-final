<?php
require_once './ana.php';

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { 
    if ($_SESSION['id'] == 5 && $_SESSION['user_name'] == 'admin') { 
        
        if(isset($_GET['id']))
        {
            $id = $_GET["id"];
            $sorgu = $conn->prepare("DELETE FROM bolum WHERE id =:id");
            $sorgu -> execute(array(":id" => $id));
            
            $sorgu2 = $conn->prepare("DELETE FROM kategoriler WHERE id =:id");
            $sorgu2 -> execute(array(":id" => $id));
            
            echo "<script>alert('Kayıt başarıyla silindi.');</script>";
        }
    }
    else { 
        header("Location: ev.php");
	   exit(); 
    } 
}
else { 
       header("Location: ev.php");
	   exit(); 
    }

require_once './son.php';
?>