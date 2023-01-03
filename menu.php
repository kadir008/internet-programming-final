<?php
  require_once './ana.php';
?>
 
<section id="menu">
       <div id="logo">43Station</div>  
       <nav>
            <?php if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { ?>
                          <?php if ($_SESSION['id'] == 5 && $_SESSION['user_name'] == 'admin') { ?>
                               <a href="ev.php" target="alt"><i class="fa-solid fa-house ikon"></i>Anasayfa</a>
                               <a href="muziktablo.php" target="alt"><i class="fa-solid fa-circle-plus ikon"></i>Müzik Ekle</a>
                               <a href="radyotablosu.php" target="alt"><i class="fa-solid fa-podcast ikon"></i>Radyo Ekle</a>
                               <a href="calmalistesiekle.php" target="alt"><i class="fa-regular fa-file-audio ikon"></i>Çalma Listesi Ekle</a>
                               <a href="mailler.php" target="alt"><i class="fa-solid fa-inbox ikon"></i>Mailler</a>
                               <a href="tummuzikler.php" target="alt"><i class="fa-solid fa-music ikon"></i>Müzikler</a>
                               <a href="radyolar.php" target="alt"><i class="fa-solid fa-radio ikon"></i>Radyolar</a>
                               <a href="logout.php" target="alt"><i class="fa-solid fa-right-from-bracket ikon"></i>Çıkış Yap</a>
                               <h1><i class="fa-solid fa-face-smile ikon"></i>Merhaba <?php echo $_SESSION['name']; ?></h1>
                           <?php }else{ ?>
                                    <a href="ev.php" target="alt"><i class="fa-solid fa-house ikon"></i>Anasayfa</a>
                                    <a href="tummuzikler.php" target="alt"><i class="fa-solid fa-music ikon"></i>Müzikler</a>
                                    <a href="radyolar.php" target="alt"><i class="fa-solid fa-radio ikon"></i>Radyolar</a>
                                    <a href="hakkimizda.php" target="alt"><i class="fa-solid fa-circle-info ikon"></i>Hakkımızda</a>
                                    <a href="iletisim.php" target="alt"><i class="fa-solid fa-envelope ikon"></i>İletişim</a>
                                    <a href="logout.php" target="alt"><i class="fa-solid fa-right-from-bracket ikon"></i>Çıkış Yap</a>
                                    <h1><i class="fa-solid fa-face-smile ikon"></i>Merhaba <?php echo $_SESSION['name']; ?></h1>
                            <?php } ?>
            <?php }else{ ?>
                    <a href="ev.php" target="alt"><i class="fa-solid fa-house ikon"></i>Anasayfa</a>
                    <a href="tummuzikler.php" target="alt"><i class="fa-solid fa-music ikon"></i>Müzikler</a>
                    <a href="radyolar.php" target="alt"><i class="fa-solid fa-radio ikon"></i>Radyolar</a>
                    <a href="hakkimizda.php" target="alt"><i class="fa-solid fa-circle-info ikon"></i>Hakkımızda</a>
                    <a href="iletisim.php" target="alt"><i class="fa-solid fa-envelope ikon"></i>İletişim</a>
                    <a href="javascript:;" onclick="parent.alt.myFunctio()"><i class="fa-solid fa-user ikon"></i>Giriş Yap</a>
            <?php } ?>
            
       </nav>
    </section>
      
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

<?php
    require_once './footer.php';
?>     