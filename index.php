<?php
try{
        $conn = new PDO("mysql:host=127.0.0.1;dbname=43station;charset=utf8", 'root', '');
}catch (PDOException $e){
        echo 'Veritabanı bağlantısı başarısız.';
        die();
} 
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>43 Station</title>
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ff8b0b792d.js" crossorigin="anonymous"></script>
</head>
<body>
    
     <section id="menu">
       <div id="logo">43 Station</div>
       <nav>      
            <a class="aktif" href=""><i class="fa-solid fa-house ikon"></i>Anasayfa</a>
            <a href=""><i class="fa-solid fa-circle-info ikon"></i>Hakkımızda</a>
            <a href=""><i class="fa-solid fa-music ikon"></i>Sanatçılar</a>
            <a href=""><i class="fa-solid fa-radio ikon"></i>Radyolar</a>
            <a href=""><i class="fa-solid fa-envelope ikon"></i>İletişim</a>    
       </nav>
    </section>
            
    <div id="icerik">
            <h1>Canlı Radyo ve 7/24 Müzik Dinle</h1>
            <p>Canlı Yayın Radyolar ile dilediğiniz radyoyu kesintisiz dinleyebilirsiniz.<br>
            Müzikseverlerin ortak noktada buluştuğu bu online radyolarda pop, rock, arabesk, türk sanat müziği,<br>türkü gibi farklı türlerdeki şarkıları moduna göre Türkçe-yabancı slow, romantik ve enerjik müzikleri de bulabilirsin.<br>
            İstersen 70'ler, 80'ler ve 90'ların en popüler şarkıları ile coşarken, istersen nostaljik bir yolculuğa çıkabilir,<br> istersen de günümüzün en hit şarkılarını dinleyebilirsin.</p>
    </div>
    
    <div id="hareketli"><h2>EĞLENCENE HAREKET KAT</h2></div>
    <div id="kutular"> 
        <div id="kutu"><a href=""><img src="../Radyo/img/kategori1.jpg" /></a></div>
        <div id="kutu"><a href=""><img src="../Radyo/img/kategori2.jpg" /></a></div>
        <div id="kutu"><a href=""><img src="../Radyo/img/kategori3.jpg" /></a></div>
        <div id="kutu"><a href=""><img src="../Radyo/img/kategori4.jpg" /></a></div>
        <div id="kutu"><a href=""><img src="../Radyo/img/kategori7.jpg" /></a></div>
        <div id="kutu"><a href=""><img src="../Radyo/img/kategori6.jpg" /></a></div>    
    </div>
    
    <div id="radyolar"><h2>CANLI RADYOLAR</h2></div>
    <div id="radyokutuları"> 
        <div id="radyo"><img src="../Radyo/img/radyo1.jpg" /></div>
        <div id="radyo"><img src="../Radyo/img/radyo2.jpg" /></div>
        <div id="radyo"><img src="../Radyo/img/radyo3.jpg" /></div>
        <div id="radyo"><img src="../Radyo/img/radyo4.jpg" /></div>
        <div id="radyo"><img src="../Radyo/img/radyo5.png" /></div>
    </div>
    
    <div id="nostalji"><h2>BİRAZ NOSTALJİ</h2></div>
    <div id="nostaljikutuları"> 
        <div id="nostaljii"><a href=""><img src="../Radyo/img/nostalji1.jpg" /></a></div>
        <div id="nostaljii"><a href=""><img src="../Radyo/img/nostalji2.jpg" /></a></div>
        <div id="nostaljii"><a href=""><img src="../Radyo/img/nostalji3.jpg" /></a></div>
        <div id="nostaljii"><a href=""><img src="../Radyo/img/nostalji4.jpg" /></a></div>
        <div id="nostaljii"><a href=""><img src="../Radyo/img/nostalji5.jpg" /></a></div>
        <div id="nostaljii"><a href=""><img src="../Radyo/img/nostalji6.jpg" /></a></div>
    </div>

    <div id="anadolu"><h2>%100 ANADOLU ROCK</h2></div>
    <div id="anadolukutuları"> 
        <div id="anadoluu"><a href=""><img src="../Radyo/img/anadolu1.jpg" /></a></div>
        <div id="anadoluu"><a href=""><img src="../Radyo/img/anadolu2.jpg" /></a></div>
        <div id="anadoluu"><a href=""><img src="../Radyo/img/anadolu3.jpg" /></a></div>
        <div id="anadoluu"><a href=""><img src="../Radyo/img/anadolu4.jpg" /></a></div>
        <div id="anadoluu"><a href=""><img src="../Radyo/img/anadolu5.jpg" /></a></div>
        <div id="anadoluu"><a href=""><img src="../Radyo/img/anadolu6.jpg" /></a></div>
    </div>
    
    <div class="altbar">
    <div id="altradyo"><img src="../Radyo/img/footer.png" /></div>
    <h2 class="radyoismi"></h2>
    
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
      
  <div class="playlist">
    <ul class="song-list">
        <?php
            $radyomuz = $conn->query("SELECT * FROM radyolar")->fetchAll();
            foreach ($radyomuz as $radyo) {
              echo "<li data-src='". $radyo['url']. "' data-name='". $radyo['adi']. "'". '></li>';
        }
        ?>
    </ul>
  </div>
    
     <script src="main.js"></script> 
     
</body>
</html>