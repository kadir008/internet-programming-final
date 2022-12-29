<?php
require_once './ana.php';
?>

<section id="tumradyolar">
            <div id="radyogorsel">
               <img src="img/tumradyolar.png" class="imgradyo">
            </div>     
            <div id="ayrintilar">
                <h1>7/24 Canlı Radyolar...</h1>
                <h2>Sitemizde Toplam <?php echo $conn->query("Select COUNT(adi) FROM radyolar")->fetchColumn(); ?> Radyo Bulunmaktadır.</h2>
                <p>Canlı yayın radyolar ile dilediğiniz radyoyu kesintisiz dinleyebilirsiniz. Türkçe pop radyolarından arabesk radyolarına, halk müziği radyolarından yabancı hit müzik radyolarına kadar geniş yayın yelpazelerine sahip tüm canlı radyolar artık bu adreste.</p> 
            </div>        
            <div id="populer">
                <h1>Popüler Müzikler</h1>
                <table id="muzikler">
                      <?php
                        $sira = 1;
                        $muzigim = $conn->query("SELECT * FROM muzikler ORDER BY rand() LIMIT 8")->fetchAll();
                        foreach ($muzigim as $muzik) {
                            echo "<tr>";       
                            echo "<td onclick='parent.ust.listem(this)' data-name='". $muzik['sanatci']. " - " .$muzik['adi'] ."'data-src=https://docs.google.com/uc?export=open&id=". $muzik['url'] .">";      
                            echo "<div class='muzikz'>";      
                            echo "<h1>". $sira.".". "</h1>";                  
                            echo "<i class='fa-regular fa-circle-play ikonmzk'></i>";       
                            echo "<h3>". $muzik['sanatci']. " - " .$muzik['adi']. "</h3>";             
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
                        $radyomuz = $conn->query("SELECT * FROM radyolar")->fetchAll();
                        foreach ($radyomuz as $radyo) {
                            echo "<tr>";
                            echo "<td id='radyotablosu' onclick='parent.ust.listem(this)' data-name='". $radyo['adi'] ."' data-src='". $radyo['url']. "'>";
                            echo "<div class='tutucu'>";
                            echo "<h1>". $sira.".". "</h1>";
                            echo "<i class='fa-regular fa-circle-play ikonlar'></i>";
                            echo "<h3>". $radyo['adi']. "</h3>";
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
require_once './son.php';
?>