<?php
    session_start();
    require_once './connection.php';
?>
 
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>43 Station</title>
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">   
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@700&display=swap" rel="stylesheet">    
    <script src="https://kit.fontawesome.com/ff8b0b792d.js" crossorigin="anonymous"></script>
</head>
<body>

<div id="myModal" class="modal"> 
    <form id="girisyap" action="girisyap.php" method="post">
                 <span class="close">&times;</span>
     	            <h2>Giriş Yap</h2>
     	        <?php if (isset($_GET['error'])) { ?>
     		     <p class="error"><?php echo $_GET['error']; ?></p>
     	        <?php } ?>
     	            <label>Kullanıcı Adı</label>
     	        <input type="text" name="uname" placeholder="Kullanıcı Adı">

     	        <label>Şifre</label>
     	        <input type="password" name="password" placeholder="Şifre">

     	        <button type="submit">Giriş</button>
                  <a href="#" id="myBtn2" class="ca">Yeni bir hesap oluştur.</a>
    </form>
</div> 
 
<div id="myModal2" class="modal2"> 
   <form id="girisyap" action="kayitol.php" method="post">
        <span class="close2">&times;</span>
     	<h2>Kayıt Ol</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Adınız</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>">
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name">
          <?php }?>

          <label>Kullanıcı Adı</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Kullanıcı Adı"
                      value="<?php echo $_GET['uname']; ?>">
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Kullanıcı Adı">
          <?php }?>


     	<label>Şifre</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Şifre">

          <label>Şifre Tekrar</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Şifre Tekrar">

     	<button type="submit">Kayıt Ol</button>
          <a href="#" id="myBtn3" class="ca">Zaten bir hesabınız var mı?</a>
</form>
</div>


