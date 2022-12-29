<?php 
require_once './ana.php';

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: ev.php?error=Kullanıcı adı gereklidir");
	    exit();
	}else if(empty($pass)){
        header("Location: ev.php?error=Şifre gereklidir");
	    exit();
	}else{
        $pass = md5($pass); 
        $sth = $conn->query("SELECT * FROM users WHERE user_name='$uname' AND password='$pass'",PDO::FETCH_ASSOC);
		$result = $sth->rowCount();
        
		if ($result === 1) {
			$row = $sth->fetch(PDO::FETCH_ASSOC);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
                echo "<script>parent.location.reload();</script>";
		        exit();
            }else{
				header("Location: ev.php?error=Kullanıcı adı ya da şifre yanlış!");
		        exit();
			}
		}else{
			header("Location: ev.php?error=Kullanıcı adı ya da şifre yanlış!");
	        exit();
		}
	}
	
}else{
	header("Location: ev.php");
	exit();
}