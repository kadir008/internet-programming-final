<?php
require_once './ana.php';

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { 
    if ($_SESSION['id'] == 5 && $_SESSION['user_name'] == 'admin') { 
        
        if(isset($_GET['id']))
        {
            $id = $_GET["id"];
            $sorgu = $conn->prepare("SELECT * FROM muzikler WHERE id =:id");
            $sorgu -> execute(array(":id" => $id));
            $row = $sorgu -> fetch(PDO::FETCH_ASSOC); 
        }
        if(isset($_POST['adi'], $_POST['sanatci'], $_POST['kategori'], $_POST['url'], $_GET['id'])){   
            
            $id = $_GET["id"];
            $adi = $_POST['adi'];
            $sanatci = $_POST['sanatci'];
            $kategori = $_POST['kategori'];
            $link = $_POST['url'];
            
            $sorgu = $conn->prepare("SELECT * FROM muzikler WHERE id =:id");
            $sorgu -> execute(array(":id" => $id));
            $row = $sorgu -> fetch(PDO::FETCH_ASSOC);
            
            if ($row > 0) {
                $conn->prepare("UPDATE muzikler SET adi = ?, sanatci = ?, url = ?, kategori = ? WHERE id = '$id'")->execute([$adi, $sanatci, $link, $kategori]);
                echo "<script>alert('Müzik başarıyla düzenlendi.'); window.location.href='muziktablo.php';</script>";

            }
        }    
        else if(isset($_POST['adi'], $_POST['sanatci'], $_POST['kategori'], $_POST['url']) && empty($_GET['id'])) {    
            $adi = $_POST['adi'];
            $sanatci = $_POST['sanatci'];
            $kategori = $_POST['kategori'];
            $link = $_POST['url'];
            
                  $sth = $conn->prepare("SELECT * FROM muzikler WHERE url='$link'");
		          $sth->execute();
		          $result = $sth->fetch(PDO::FETCH_ASSOC);
		          if ($result > 0) {
			             echo "<script>alert('Zaten böyle bir şarkı mevcut.');</script>";
		          }
                  else {
			             $conn->prepare("INSERT INTO muzikler (adi, sanatci, url, kategori) VALUES (?, ?, ?, ?)")->execute([$adi, $sanatci, $link, $kategori]);
                         echo "<script>alert('Müziğiniz başarıyla eklenmiştir.');</script>";
                         
            }  
        }      
        $kategoriid = $conn->prepare("SELECT * FROM kategoriler ORDER BY isim ASC");
        $kategoriid -> execute();
        $kategoriler = $kategoriid->fetchAll(PDO::FETCH_ASSOC);      
?>

<section id="Ekleme">
           <h1>Müzik Ekle / Düzenle</h1>
            <div id="kelemeyap">
            <form action="" method="POST">
              <div id="eklemegroup">
                <div id="ekleform">
                    <input type="text" name="adi" value='<?php if(isset($_GET['id'])) echo $row['adi']; ?>' placeholder="Müzik Adı" required class="iletisimcontrol">
                    <input type="text" name="sanatci" value='<?php if(isset($_GET['id'])) echo $row['sanatci']; ?>' placeholder="Sanatçı Adı" required class="iletisimcontrol">
                    <input type="text" name="url" value='<?php if(isset($_GET['id'])) echo $row['url']; ?>' placeholder="Müzik Url" required class="iletisimcontrol">
                    <select id="secilen2" name="kategori">
                     <?php
                        foreach($kategoriler as $kategori) {
                                $seciliMi = "";
                            if ($row['kategori'] == $kategori['id']) {
                                $seciliMi = "selected";
                            }
                            echo '<option value="'.$kategori['id'].'" '.$seciliMi.'>'.$kategori['isim'].'</option>';
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
        <h1>Müzik Kategorileri</h1>
        <p>Listelemek istediğiniz kategoriyi seçiniz ve listele butonuna basınız. Düzenle butonuna bastığınızda bilgiler yukarıdaki alana otomatik olarak gönderilecektir.<br>Sil butonu ile müziğinizi silebilirsiniz.</p>      
        <form action="" method="POST">
            <select id="secilen" name="MusicId">
                <?php
                    foreach($kategoriler as $kategori) {
                        echo '<option value="'.$kategori['id'].'" '.$seciliMi.'>'.$kategori['isim'].'</option>';
                    }
                ?>
            </select>
                <input type='submit' name='submit' id="listele" value="Listele" />
            </form>      
        <tr>         
            <th>İd</th>
            <th>Müzik Adı</th>
            <th>Sanatçı Adı</th>
            <th>Kategori</th>
            <th>Url</th>
            <th>İşlemler</th>
        </tr>
        </thead>
        <tbody>          
           <?php
            if(isset($_POST['submit'])){
              $i = $_POST['MusicId'];
              $muzikler = $conn->prepare("SELECT * FROM muzikler INNER JOIN kategoriler ON muzikler.kategori = kategoriler.id WHERE kategori = '$i'");
              $muzikler->execute();
              foreach ($muzikler as $muzik)
              {
                  echo "<tr>";
                  echo "<td>". $muzik['id'] ."</td>";
                  echo "<td>". $muzik['adi'] ."</td>";
                  echo "<td>". $muzik['sanatci'] ."</td>";
                  echo "<td>" .$muzik['isim']. "</td>";
                  echo "<td>". $muzik['url'] ."</td>";
                  echo '<td><a href="./muziktablo.php?id='. $muzik['id']. '"><i class="fa-solid fa-pen-to-square ikonum"></i></a>  <a href="./muziksil.php?id='. $muzik['id']. '"><i class="fa-solid fa-trash ikonum"></i></i></a></td>';
                  echo "</tr>";
               }
            }
            else
            {
              $muziks = $conn->query("SELECT * FROM muzikler INNER JOIN kategoriler ON muzikler.kategori = kategoriler.id")->fetchAll();
              foreach ($muziks as $muzik)
              {
                  echo "<tr>";
                  echo "<td>". $muzik['id'] ."</td>";
                  echo "<td>". $muzik['adi'] ."</td>";
                  echo "<td>". $muzik['sanatci'] ."</td>";
                  echo "<td>" .$muzik['isim']. "</td>";
                  echo "<td>". $muzik['url'] ."</td>";
                  echo '<td><a href="./muziktablo.php?id='. $muzik['id']. '"><i class="fa-solid fa-pen-to-square ikonum"></i></a>  <a href="./muziksil.php?id='. $muzik['id']. '"><i class="fa-solid fa-trash ikonum"></i></i></a></td>';
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

