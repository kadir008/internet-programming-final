<?php
require_once './connection.php';
require_once './home.php';
require_once './menu.php';
?>

<section id="tumradyolar">
            <div id="radyogorsel">
               <img src="img/anadolu4.jpg" class="imgradyo">
            </div>     
            <div id="ayrintilar">
                <h1>Haluk Levent</h1>
                <h2>Toplam <?php echo $conn->query("Select COUNT(adi) FROM muzikler WHERE kategori='16'")->fetchColumn(); ?> Şarkı Bulunmaktadır.</h2>
                <p>Haluk Levent'in şarkılarını senin için derledik. İşte Haluk Levent'in dillerden düşmeyen Akdeniz Akşamları, Anlasana ve Ela Gözlüm şarkılarının da yer aldığı çalma listesi...</p> 
            </div>
            <div id="populer">
                <h1>Popüler Radyolar</h1>
                 <table id="muzikler">
                      <?php
                        $sira = 1;
                        $radyom = $conn->query("SELECT * FROM radyolar ORDER BY rand() LIMIT 8")->fetchAll();
                        foreach ($radyom as $radyo) {
                            echo "<tr>";       
                            echo "<td onclick='listem(this)' data-name='". $radyo['adi'] ."' data-src='". $radyo['url']. "'>"; 
                            echo "<div class='muzikz'>";      
                            echo "<h1>". $sira.".". "</h1>";                  
                            echo "<i class='fa-regular fa-circle-play ikonmzk'></i>";       
                            echo "<h3>". $radyo['adi']. "</h3>";
                            echo "</div>";
                            echo "</td>";
                            echo "</tr>";
                            $sira++;
                    }
                    ?> 
               </table>
            </div>
            <div id="tablolar">
               <table id="radyotablosu">
                     
                      <?php
                        $sira = 1;
                        $muzikler = $conn->query("SELECT * FROM muzikler WHERE kategori='16'")->fetchAll();
                        foreach ($muzikler as $muzik) {
                            echo "<tr>";
                            echo "<td onclick='listem(this)' data-name='". $muzik['sanatci']. " - " .$muzik['adi'] ."'data-src=https://docs.google.com/uc?export=open&id=". $muzik['url'] .">";
                            echo "<div class='tutucu'>";
                            echo "<h1>". $sira.".". "</h1>";
                            echo "<i class='fa-regular fa-circle-play ikonlar'></i>";
                            echo "<h3>". $muzik['sanatci']. " - " .$muzik['adi']. "</h3>";
                            echo "<div class='ikons'><i class='fa-regular fa-heart ikonlar'></i></div>";
                            echo "</div>";
                            echo "</td>";
                            echo "</tr>";
                            $sira++;
                    }
                    ?> 
               </table>             
            </div>  
</section>


<?php
require_once './footer.php';
?>