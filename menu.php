 <?php session_start(); ?>
    <section id="menu">
       <div id="logo">43Station</div>  
       <nav>           
            <?php if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?>
                          <?php if ($_SESSION['id'] == 5 && $_SESSION['user_name'] == 'admin') { ?>
                               <a href="./index.php"><i class="fa-solid fa-house ikon"></i>Anasayfa</a>
                               <a href="#"><i class="fa-solid fa-circle-plus ikon"></i>Müzik Ekle</a>
                               <a href="#"><i class="fa-solid fa-podcast ikon"></i>Radyo Ekle</a>
                               <a href="#"><i class="fa-solid fa-inbox ikon"></i>Mailler</a>
                               <a href="./logout.php"><i class="fa-solid fa-right-from-bracket ikon"></i>Çıkış Yap</a>
                               <h1><i class="fa-solid fa-face-smile ikon"></i>Merhaba <?php echo $_SESSION['name']; ?></h1>
                           <?php }else{ ?>
                                    <a href="./index.php"><i class="fa-solid fa-house ikon"></i>Anasayfa</a>
                                    <a href="./tummuzikler.php"><i class="fa-solid fa-music ikon"></i>Müzikler</a>
                                    <a href="./radyolar.php"><i class="fa-solid fa-radio ikon"></i>Radyolar</a>
                                    <a href="./hakkimizda.php"><i class="fa-solid fa-circle-info ikon"></i>Hakkımızda</a>
                                    <a href="./iletisim.php"><i class="fa-solid fa-envelope ikon"></i>İletişim</a>
                                    <a href="./logout.php"><i class="fa-solid fa-right-from-bracket ikon"></i>Çıkış Yap</a>
                                    <h1><i class="fa-solid fa-face-smile ikon"></i>Merhaba <?php echo $_SESSION['name']; ?></h1>
                            <?php } ?>
            <?php }else{ ?>
                    <a href="./index.php"><i class="fa-solid fa-house ikon"></i>Anasayfa</a>
                    <a href="./tummuzikler.php"><i class="fa-solid fa-music ikon"></i>Müzikler</a>
                    <a href="./radyolar.php"><i class="fa-solid fa-radio ikon"></i>Radyolar</a>
                    <a href="./hakkimizda.php"><i class="fa-solid fa-circle-info ikon"></i>Hakkımızda</a>
                    <a href="./iletisim.php"><i class="fa-solid fa-envelope ikon"></i>İletişim</a>
                    <a href="#" id="myBtn"><i class="fa-solid fa-user ikon"></i>Giriş Yap</a>
            <?php } ?>
            
       </nav>
    </section>
    
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
   
    <div id="muzikcalar">
         <div id="tumu">
                 <h2 class="radyoismi">Canlı Radyo Dinle</h2> 
             <div class="buttons">
                  <div class="prev-track" onclick="prevTrack()"><i class="fa-solid fa-backward fa-3x icon"></i></div>
                  <div class="playpause-track" onclick="playpauseTrack()"><i class="fa-solid fa-circle-play fa-3x icon"></i></div>
                  <div class="next-track" onclick="nextTrack()"><i class="fa-solid fa-forward fa-3x icon"></i></div>
            </div>	
                    <div class="slider_container">
                          <div class="current-time">00:00</div>
                          <input type="range" min="1" max="100" value="0" class="seek_slider" onchange="seekTo()">
                    <div class="total-duration">00:00</div>
                    </div>	
            <div class="volume_container"><i class="fa-solid fa-volume-low icon"></i>
                  <input type="range" min="1" max="100" value="99" class="volume_slider" onchange="setVolume()">
            </div>
         </div>      
    </div>