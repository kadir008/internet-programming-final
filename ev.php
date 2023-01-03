<?php
require_once './ana.php';
?>
 
  <div id="icerik">
            <h1>7/24 Canlı Radyo ve Müzik</h1>
            <p>Canlı Yayın Radyolar ile dilediğiniz radyoyu kesintisiz dinleyebilirsiniz.<br>
            Müzikseverlerin ortak noktada buluştuğu bu online radyolarda pop, rock, arabesk, türk sanat müziği,<br>türkü gibi farklı türlerdeki şarkıları moduna göre Türkçe-yabancı slow, romantik ve enerjik müzikleri de bulabilirsin.<br>
            İstersen 70'ler, 80'ler ve 90'ların en popüler şarkıları ile coşarken, istersen nostaljik bir yolculuğa çıkabilir,<br> istersen de günümüzün en hit şarkılarını dinleyebilirsin.</p>
    </div>
    
    <?php
        $bolumsayisi = $conn->query("Select MAX(bolumid) FROM bolum")->fetchColumn();
        for($i = 0; $i <= $bolumsayisi; $i++)
        {
              $isim = $conn->query("Select baslik FROM genelbaslik WHERE bolumid = '$i'")->fetchColumn();
              $kategoris = $conn->query("SELECT * FROM bolum WHERE bolumid = '$i'")->fetchAll();     
              echo "<div id='hareketli'><h2>". $isim ."</h2></div>";
              echo "<div id='kutular'>";
              foreach ($kategoris as $kategori)
              {
                  echo "<div id='kutu'>";
                      echo '<a href="./calmalistesi.php?id='. $kategori['id']. '"><img src="'. $kategori['gorselurl'] .'" /></a>';
                  echo "</div>";
              }
                  echo "</div>";   
        }
    ?>   
     
<?php
require_once './son.php';
?>
