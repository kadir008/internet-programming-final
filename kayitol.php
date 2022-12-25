<?php 
session_start(); 
require_once './connection.php';

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: index.php?error=Kullanıcı adı gerekli&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Şifre alanı boş bırakılamaz&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: index.php?error=Şifre alanı boş bırakılamaz&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: index.php?error=Ad alanı boş bırakılamaz&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: index.php?error=Şifreler eşleşmiyor&$user_data");
	    exit();
	}

	else{

        $pass = md5($pass);
		$sth = $conn->prepare("SELECT * FROM users WHERE user_name='$uname'");
		$sth->execute();
		$result = $sth->fetch(PDO::FETCH_ASSOC);

		if ($result > 0) {
			header("Location: index.php?error=Kullanıcı adı kullanımda.&$user_data");
	        exit();
		}else {
			$insert_query = "INSERT INTO users(user_name, password, name) VALUES (?, ?, ?)";
			$insert = $conn->prepare($insert_query);
			$insert->execute(array(
				$uname,
				$pass,
				$name
			));
           	header("Location: index.php?success=Başarıyla kayıt oldun.");
			exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}