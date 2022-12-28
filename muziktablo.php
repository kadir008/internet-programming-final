<?php
require_once 'home.php';
?>

<?php if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { 
    if ($_SESSION['id'] == 5 && $_SESSION['user_name'] == 'admin') { 
    require_once 'menu.php'; ?>

<?php
        
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
                           <option value="1">Türkçe Pop</option>
                           <option value="2">Yabancı Pop</option>
                           <option value="3">Türkçe Rock</option>
                           <option value="4">Yaz Şarkıları</option>
                           <option value="5">Türk Sanat Müziği</option>
                           <option value="6">Karadeniz</option>
                           <option value="7">Pop Nostalji</option>
                           <option value="8">Anadolu Rock</option>
                           <option value="9">Eski Şarkılar</option>
                           <option value="10">45lik</option>
                           <option value="11">Efsane Şarkılar</option>
                           <option value="12">Retro Şarkılar</option>
                           <option value="13">Cem Karaca</option>
                           <option value="14">Kıraç</option>
                           <option value="15">Erkin Koray</option>
                           <option value="16">Haluk Levent</option>
                           <option value="17">Edip Akbayram</option>
                           <option value="18">Barış Manço</option>
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
               <option value="1">Türkçe Pop</option>
               <option value="2">Yabancı Pop</option>
               <option value="3">Türkçe Rock</option>
               <option value="4">Yaz Şarkıları</option>
               <option value="5">Türk Sanat Müziği</option>
               <option value="6">Karadeniz</option>
               <option value="7">Pop Nostalji</option>
               <option value="8">Anadolu Rock</option>
               <option value="9">Eski Şarkılar</option>
               <option value="10">45lik</option>
               <option value="11">Efsane Şarkılar</option>
               <option value="12">Retro Şarkılar</option>
               <option value="13">Cem Karaca</option>
               <option value="14">Kıraç</option>
               <option value="15">Erkin Koray</option>
               <option value="16">Haluk Levent</option>
               <option value="17">Edip Akbayram</option>
               <option value="18">Barış Manço</option>
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
              $muzikler = $conn->prepare("SELECT * FROM muzikler WHERE kategori = '$i'");
              $muzikler->execute();
              foreach ($muzikler as $muzik)
              {
                  $kategori = ""; 
                  if ($muzik['kategori'] == '1') $kategori = "Türkçe Pop";
                  else if ($muzik['kategori'] == '2') $kategori = "Yabancı Pop";
                  else if ($muzik['kategori'] == '3') $kategori = "Türkçe Rock";
                  else if ($muzik['kategori'] == '4') $kategori = "Yaz Şarkıları";
                  else if ($muzik['kategori'] == '5') $kategori = "Türk Sanat Müziği";
                  else if ($muzik['kategori'] == '6') $kategori = "Karadeniz";
                  else if ($muzik['kategori'] == '7') $kategori = "Pop Nostalji";
                  else if ($muzik['kategori'] == '8') $kategori = "Anadolu Rock";
                  else if ($muzik['kategori'] == '9') $kategori = "Eski Şarkılar";
                  else if ($muzik['kategori'] == '10') $kategori = "45lik";
                  else if ($muzik['kategori'] == '11') $kategori = "Efsane Şarkılar";
                  else if ($muzik['kategori'] == '12') $kategori = "Retro Şarkılar";
                  else if ($muzik['kategori'] == '13') $kategori = "Cem Karaca";
                  else if ($muzik['kategori'] == '14') $kategori = "Kıraç";
                  else if ($muzik['kategori'] == '15') $kategori = "Erkin Koray";
                  else if ($muzik['kategori'] == '16') $kategori = "Haluk Levent";
                  else if ($muzik['kategori'] == '17') $kategori = "Edip Akbayram";
                  else if ($muzik['kategori'] == '18') $kategori = "Barış Manço";
                  
                  echo "<tr>";
                  echo "<td>". $muzik['id'] ."</td>";
                  echo "<td>". $muzik['adi'] ."</td>";
                  echo "<td>". $muzik['sanatci'] ."</td>";
                  echo "<td>" .$kategori. "</td>";
                  echo "<td>". $muzik['url'] ."</td>";
                  echo '<td><a href="./muziktablo.php?id='. $muzik['id']. '"><i class="fa-solid fa-pen-to-square ikonum"></i></a>  <a href="./muziksil.php?id='. $muzik['id']. '"><i class="fa-solid fa-trash ikonum"></i></i></a></td>';
                  echo "</tr>";
               }
            }
            else
            {
              $muziks = $conn->query("SELECT * FROM muzikler")->fetchAll();
              foreach ($muziks as $muzik)
              {
                  $kategori = ""; 
                  if ($muzik['kategori'] == '1') $kategori = "Türkçe Pop";
                  else if ($muzik['kategori'] == '2') $kategori = "Yabancı Pop";
                  else if ($muzik['kategori'] == '3') $kategori = "Türkçe Rock";
                  else if ($muzik['kategori'] == '4') $kategori = "Yaz Şarkıları";
                  else if ($muzik['kategori'] == '5') $kategori = "Türk Sanat Müziği";
                  else if ($muzik['kategori'] == '6') $kategori = "Karadeniz";
                  else if ($muzik['kategori'] == '7') $kategori = "Pop Nostalji";
                  else if ($muzik['kategori'] == '8') $kategori = "Anadolu Rock";
                  else if ($muzik['kategori'] == '9') $kategori = "Eski Şarkılar";
                  else if ($muzik['kategori'] == '10') $kategori = "45lik";
                  else if ($muzik['kategori'] == '11') $kategori = "Efsane Şarkılar";
                  else if ($muzik['kategori'] == '12') $kategori = "Retro Şarkılar";
                  else if ($muzik['kategori'] == '13') $kategori = "Cem Karaca";
                  else if ($muzik['kategori'] == '14') $kategori = "Kıraç";
                  else if ($muzik['kategori'] == '15') $kategori = "Erkin Koray";
                  else if ($muzik['kategori'] == '16') $kategori = "Haluk Levent";
                  else if ($muzik['kategori'] == '17') $kategori = "Edip Akbayram";
                  else if ($muzik['kategori'] == '18') $kategori = "Barış Manço";
                  
                  echo "<tr>";
                  echo "<td>". $muzik['id'] ."</td>";
                  echo "<td>". $muzik['adi'] ."</td>";
                  echo "<td>". $muzik['sanatci'] ."</td>";
                  echo "<td>" .$kategori. "</td>";
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
require_once './footer.php';
 } 
} 
else { 
    header("Location: index.php");
	exit(); } 
?>

