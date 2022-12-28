<?php
require_once './home.php';
?>

<?php if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { 
    if ($_SESSION['id'] == 5 && $_SESSION['user_name'] == 'admin') { 
    require_once './menu.php'; ?>

<?php
        
        if(isset($_GET['id']))
        {
            $id = $_GET["id"];
            $sorgu = $conn->prepare("SELECT * FROM radyolar WHERE id =:id");
            $sorgu -> execute(array(":id" => $id));
            $row = $sorgu -> fetch(PDO::FETCH_ASSOC); 
        }
        if(isset($_POST['adi'], $_POST['url'], $_GET['id'])){   
            
            $id = $_GET["id"];
            $adi = $_POST['adi'];
            $url = $_POST['url'];
            
            $sorgu = $conn->prepare("SELECT * FROM radyolar WHERE id =:id");
            $sorgu -> execute(array(":id" => $id));
            $row = $sorgu -> fetch(PDO::FETCH_ASSOC); 
            
            if ($row > 0) {
                $conn->prepare("UPDATE radyolar SET adi = ?, url = ? WHERE id = '$id'")->execute([$adi, $url]);
                echo "<script>alert('Radyo başarıyla düzenlendi.'); window.location.href='radyotablosu.php';</script>";
            }
        }    
        else if(isset($_POST['adi'], $_POST['url']) && empty($_GET['id'])) {    
            $adi = $_POST['adi'];
            $url = $_POST['url'];
            
                  $sth = $conn->prepare("SELECT * FROM radyolar WHERE url='$url'");
		          $sth->execute();
		          $result = $sth->fetch(PDO::FETCH_ASSOC);
		          if ($result > 0) {
			             echo "<script>alert('Zaten böyle bir radyo mevcut.');</script>";
		          }
                  else {
			            $conn->prepare("INSERT INTO radyolar (adi, url) VALUES (?, ?)")->execute([$adi, $url]);
                        echo "<script>alert('Radyonuz başarıyla eklenmiştir.');</script>";              
            }  
        }      
?>

<section id="Ekleme">
           <h1>Radyo Ekle / Düzenle</h1>
            <div id="eklemeyap">
             <form action="" method="POST">
              <div id="eklemegroup">
                <div id="ekleform">
                    <input type="text" name="adi" value='<?php if(isset($_GET['id'])) echo $row['adi']; ?>' placeholder="Radyo Adı" required class="iletisimcontrol">
                    <input type="text" name="url" value='<?php if(isset($_GET['id'])) echo $row['url']; ?>' placeholder="Radyo Url" required class="iletisimcontrol">
                </div>
                    <input type="submit" value="Ekle">   
              </div>
              </form>
            </div>        
</section>

<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <h1>Tüm Radyolar</h1>
        <p>Düzenle butonuna bastığınızda bilgiler yukarıdaki alana otomatik olarak gönderilecektir.<br>Sil butonu ile radyonuzu silebilirsiniz.</p>
        <tr>
            <th>İd</th>
            <th>Radyo Adı</th>
            <th>Url</th>
            <th>İşlemler</th>
        </tr>
        </thead>
        <tbody>          
           <?php
              $radyolar = $conn->query("SELECT * FROM radyolar")->fetchAll();
              foreach ($radyolar as $radyo) {
                  echo "<tr>";
                  echo "<td>". $radyo['id'] ."</td>";
                  echo "<td>". $radyo['adi'] ."</td>";
                  echo "<td>". $radyo['url'] ."</td>";
                  echo '<td><a href="./radyotablosu.php?id='. $radyo['id']. '"><i class="fa-solid fa-pen-to-square ikonum"></i></a>  <a href="./radyosil.php?id='. $radyo['id']. '"><i class="fa-solid fa-trash ikonum"></i></i></a></td>';
                  echo "</tr>";
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



