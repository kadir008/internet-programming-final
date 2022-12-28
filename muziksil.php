<?php
require_once 'home.php';

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { 
    if ($_SESSION['id'] == 5 && $_SESSION['user_name'] == 'admin') { 
        
        if(isset($_GET['id']))
        {
            $id = $_GET["id"];
            $sorgu = $conn->prepare("DELETE FROM muzikler WHERE id =:id");
            $sorgu -> execute(array(":id" => $id));
            echo "<script>alert('Kayıt başarıyla silindi.'); window.location.href='muziktablo.php';</script>";
        }
    }
    else { 
        header("Location: index.php");
	   exit(); 
    } 
}
else { 
       header("Location: index.php");
	   exit(); 
    }

require_once 'footer.php';
?>