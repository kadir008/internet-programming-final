<?php
require_once './ana.php';

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { 
    if ($_SESSION['id'] == 5 && $_SESSION['user_name'] == 'admin') { 
        
        if(isset($_GET['id']))
        {
            $id = $_GET["id"];
            $sorgu = $conn->prepare("SELECT * FROM bolum WHERE id =:id");
            $sorgu -> execute(array(":id" => $id));
            $row = $sorgu -> fetch(PDO::FETCH_ASSOC); 
        }
        if(isset($_POST['baslik'], $_POST['aciklama'], $_POST['gorselurl'], $_POST['kategori'], $_GET['id'])){   
            
            $id = $_GET["id"];
            $baslik = $_POST['baslik'];
            $aciklama = $_POST['aciklama'];
            $gorselurl = $_POST['gorselurl'];
            $kategori = $_POST['kategori'];
            
            $sorgu = $conn->prepare("SELECT * FROM bolum WHERE id =:id");
            $sorgu -> execute(array(":id" => $id));
            $row = $sorgu -> fetch(PDO::FETCH_ASSOC);
            
            if ($row > 0) {
                $conn->prepare("UPDATE bolum SET baslik = ?, aciklama = ?, gorselurl = ?, bolumid = ? WHERE id = '$id'")->execute([$baslik, $aciklama, $gorselurl, $kategori]);
                
                $conn->prepare("UPDATE kategoriler SET isim = ? WHERE id = '$id'")->execute([$baslik]);
                
                echo "<script>alert('Çalma listeniz başarıyla düzenlendi.');</script>";

            }
        }    
        else if(isset($_POST['baslik'], $_POST['aciklama'], $_POST['gorselurl'], $_POST['kategori']) && empty($_GET['id'])) {    
            $baslik = $_POST['baslik'];
            $aciklama = $_POST['aciklama'];
            $gorselurl = $_POST['gorselurl'];
            $kategori = $_POST['kategori'];
            
			$conn->prepare("INSERT INTO bolum (baslik, aciklama, gorselurl, bolumid) VALUES (?, ?, ?, ?)")->execute([$baslik, $aciklama, $gorselurl, $kategori]);
            
            $conn->prepare("INSERT INTO kategoriler (isim) VALUES (?)")->execute([$baslik]);
            
            echo "<script>alert('Çalma listeniz başarıyla eklenmiştir.');</script>";        
        }
            
            $kategoriid = $conn->prepare("SELECT * FROM genelbaslik ORDER BY baslik ASC");
            $kategoriid -> execute();
            $kategoriler = $kategoriid->fetchAll(PDO::FETCH_ASSOC);
?>

<section id="Ekleme">
           <h1>Çalma Listesi Ekle / Düzenle</h1>
            <div id="kelemeyap">
            <form action="" method="POST">
              <div id="eklemegroup">
                <div id="ekleform">
                    <input type="text" name="baslik" value='<?php if(isset($_GET['id'])) echo $row['baslik']; ?>' placeholder="Çalma Listesi Başlığı" required class="iletisimcontrol">
                    <input type="text" name="aciklama" value='<?php if(isset($_GET['id'])) echo $row['aciklama']; ?>' placeholder="Açıklaması" required class="iletisimcontrol">
                    <input type="text" name="gorselurl" value='<?php if(isset($_GET['id'])) echo $row['gorselurl']; ?>' placeholder="Görsel Url" required class="iletisimcontrol">
                    <select id="secilen2" name="kategori">
                     <?php
                        foreach($kategoriler as $kategori) {
                                $seciliMi = "";
                            if ($row['bolumid'] == $kategori['bolumid']) {
                                $seciliMi = "selected";
                            }
                            echo '<option value="'.$kategori['bolumid'].'" '.$seciliMi.'>'.$kategori['baslik'].'</option>';
                        }
                    ?>
                    </select>
                </div>
                    <input type="submit" value="Ekle">   
              </div>
              </form>
            </div>     
</section>


<div class="table-wrapper">
    <table class="fl-table">
        <thead>  
        <h1>Çalma Listeleri</h1>
        <p>Listelemek istediğiniz kategoriyi seçiniz ve listele butonuna basınız. Düzenle butonuna bastığınızda bilgiler yukarıdaki alana otomatik olarak gönderilecektir.<br>Sil butonu ile listeyi silebilirsiniz.</p>      
        <form action="" method="POST">
            <select id="secilen" name="MusicId">
                <?php
                    foreach($kategoriler as $kategori) {
                        echo '<option value="'.$kategori['bolumid'].'" '.$seciliMi.'>'.$kategori['baslik'].'</option>';
                    }
                ?>
            </select>
                <input type='submit' name='submit' id="listele" value="Listele" />
            </form>      
        <tr>         
            <th>Çalma Listesi</th>
            <th>Genel Kategori</th>
            <th>Açıklama</th>
            <th>Görsel Url</th>
            <th>İşlemler</th>
        </tr>
        </thead>
        <tbody>          
           <?php
            if(isset($_POST['submit'])){
              $i = $_POST['MusicId'];
              $muzikler = $conn->prepare("SELECT * FROM bolum WHERE bolumid = '$i'");
              $muzikler->execute();
            $hangikategori = $conn->prepare("SELECT * FROM bolum INNER JOIN genelbaslik ON bolum.bolumid = genelbaslik.bolumid WHERE bolum.bolumid = '$i'");
            $hangikategori->execute();
            $kategori=$hangikategori->fetch(PDO::FETCH_ASSOC);
              foreach ($muzikler as $muzik)
              {
                  echo "<tr>";
                  echo "<td>". $muzik['baslik'] ."</td>";
                  echo "<td>". $kategori['baslik'] ."</td>";
                  echo "<td>". substr_replace($muzik['aciklama'], "...", 20) ."</td>";
                  echo "<td>" .$muzik['gorselurl']. "</td>";
                  echo '<td><a href="./calmalistesiekle.php?id='. $muzik['id']. '"><i class="fa-solid fa-pen-to-square ikonum"></i></a>  <a href="./calmalistesisil.php?id='. $muzik['id']. '"><i class="fa-solid fa-trash ikonum"></i></i></a></td>';
                  echo "</tr>";
               }
            }
            else
            {
              $muziks = $conn->query("SELECT * FROM bolum")->fetchAll();
              foreach ($muziks as $muzik)
              {
                  
$hangikategor = $conn->prepare("SELECT * FROM bolum INNER JOIN genelbaslik ON bolum.bolumid = genelbaslik.bolumid WHERE bolum.bolumid =".$muzik['bolumid']);
            $hangikategor->execute();
            $kategor=$hangikategor->fetch(PDO::FETCH_ASSOC);
                  
                  echo "<tr>";
                  echo "<td>". $muzik['baslik'] ."</td>";
                  echo "<td>". $kategor['baslik'] ."</td>";
                  echo "<td>". substr_replace($muzik['aciklama'], "...", 20) ."</td>";
                  echo "<td>" .$muzik['gorselurl']. "</td>";
                  echo '<td><a href="./calmalistesiekle.php?id='. $muzik['id']. '"><i class="fa-solid fa-pen-to-square ikonum"></i></a>  <a href="./calmalistesisil.php?id='. $muzik['id']. '"><i class="fa-solid fa-trash ikonum"></i></i></a></td>';
                  echo "</tr>";
               }
            }

            ?> 
        <tbody>
    </table>
</div>

<?php 
require_once './son.php';
 } 
}

else { 
    header("Location: ev.php");
	exit(); 
} 
?>

