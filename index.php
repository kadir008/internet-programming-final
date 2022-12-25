<?php
require_once './connection.php';
require_once './home.php';
require_once './menu.php';
?>
          
    <div id="icerik">
            <h1>7/24 Canlı Radyo ve Müzik</h1>
            <p>Canlı Yayın Radyolar ile dilediğiniz radyoyu kesintisiz dinleyebilirsiniz.<br>
            Müzikseverlerin ortak noktada buluştuğu bu online radyolarda pop, rock, arabesk, türk sanat müziği,<br>türkü gibi farklı türlerdeki şarkıları moduna göre Türkçe-yabancı slow, romantik ve enerjik müzikleri de bulabilirsin.<br>
            İstersen 70'ler, 80'ler ve 90'ların en popüler şarkıları ile coşarken, istersen nostaljik bir yolculuğa çıkabilir,<br> istersen de günümüzün en hit şarkılarını dinleyebilirsin.</p>
    </div>
    
    <div id="hareketli"><h2>EĞLENCENE HAREKET KAT</h2></div>
    <div id="kutular"> 
        <div id="kutu"><a href="./turkcepop.php"><img src="../Radyo/img/kategori1.jpg" /></a></div>
        <div id="kutu"><a href="./yabancipop.php"><img src="../Radyo/img/kategori2.jpg" /></a></div>
        <div id="kutu"><a href="./turkcerock.php"><img src="../Radyo/img/kategori3.jpg" /></a></div>
        <div id="kutu"><a href="./yazsarkilari.php"><img src="../Radyo/img/kategori4.jpg" /></a></div>
        <div id="kutu"><a href="./turksanatmuzik.php"><img src="../Radyo/img/kategori7.jpg" /></a></div>
        <div id="kutu"><a href="./karadeniz.php"><img src="../Radyo/img/kategori6.jpg" /></a></div>  
    </div>
    
    <div id="radyolar"><h2>CANLI RADYOLAR</h2></div>
    <div id="radyokutuları">
        <div id="radyo">
            <input type="image" src="../Radyo/img/kralfm.png" data-name="Kral FM" data-src="http://46.20.3.204/;" onclick="listem(this)">
        </div>
        <div id="radyo">
            <input type="image" src="../Radyo/img/radyo7.png" data-name="Radyo 7" data-src="http://46.20.3.250/;" onclick="listem(this)">
        </div>    
        <div id="radyo">      
            <input type="image" src="../Radyo/img/trtturku.png" data-name="TRT Türkü" data-src="https://nmicenotrt.mediatriple.net/trt_turku.aac" onclick="listem(this)">
        </div>
        <div id="radyo">
            <input type="image" src="../Radyo/img/trt1.png" data-name="TRT Radyo 1" data-src="https://nmicenotrt.mediatriple.net/trt_1.aac" onclick="listem(this)">
        </div>
        <div id="radyo">
            <input type="image" src="../Radyo/img/radyospor.png" data-name="Radyo Spor" data-src="http://46.20.7.103:8040/;" onclick="listem(this)">
        </div>
        <div id="radyo">
            <input type="image" src="../Radyo/img/radyo90lar.png" data-name="90'lar Radyo" data-src="http://37.247.98.8/stream/166/" onclick="listem(this)">
        </div>    
    </div>
    
    <div id="nostalji"><h2>BİRAZ NOSTALJİ</h2></div>
    <div id="nostaljikutuları"> 
        <div id="nostaljii"><a href="./popnostalji.php"><img src="../Radyo/img/nostalji1.jpg" /></a></div>
        <div id="nostaljii"><a href="./anadolurock.php"><img src="../Radyo/img/nostalji2.jpg" /></a></div>
        <div id="nostaljii"><a href="./eskisarkilar.php"><img src="../Radyo/img/nostalji3.jpg" /></a></div>
        <div id="nostaljii"><a href="./45lik.php"><img src="../Radyo/img/nostalji4.jpg" /></a></div>
        <div id="nostaljii"><a href="./efsanesarki.php"><img src="../Radyo/img/nostalji5.jpg" /></a></div>
        <div id="nostaljii"><a href="./retrosarkilar.php"><img src="../Radyo/img/nostalji6.jpg" /></a></div>
    </div>

    <div id="anadolu"><h2>%100 ANADOLU ROCK</h2></div>
    <div id="anadolukutuları"> 
        <div id="anadoluu"><a href="./cemkaraca.php"><img src="../Radyo/img/anadolu1.jpg" /></a></div>
        <div id="anadoluu"><a href="./kirac.php"><img src="../Radyo/img/anadolu2.jpg" /></a></div>
        <div id="anadoluu"><a href="./erkin.php"><img src="../Radyo/img/anadolu3.jpg" /></a></div>
        <div id="anadoluu"><a href="./haluklevent.php"><img src="../Radyo/img/anadolu4.jpg" /></a></div>
        <div id="anadoluu"><a href="./edip.php"><img src="../Radyo/img/anadolu5.jpg" /></a></div>
        <div id="anadoluu"><a href="./barismanco.php"><img src="../Radyo/img/anadolu6.jpg" /></a></div>
    </div>
    
<?php
require_once './footer.php';
?>