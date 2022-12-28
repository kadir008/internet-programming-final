<?php
require_once './home.php';
?>

<?php if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) { 
    if ($_SESSION['id'] == 5 && $_SESSION['user_name'] == 'admin') { 
    require_once './menu.php'; ?>

<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <h1>Tüm Mailler</h1>
        <tr>
            <th>İd</th>
            <th>Adı Soyadı</th>
            <th>E-Mail</th>
            <th>Konu</th>
            <th>İstek</th>
            <th>Mesaj</th>
        </tr>
        </thead>
        <tbody>          
           <?php
              $mailler = $conn->query("SELECT * FROM iletisim")->fetchAll();
              foreach ($mailler as $mail) {
                  echo "<tr>";
                  echo "<td>". $mail['id'] ."</td>";
                  echo "<td>". $mail['adi'] ."</td>";
                  echo "<td>". $mail['mail'] ."</td>";
                  echo "<td>". $mail['konu'] ."</td>";
                  echo "<td>". $mail['istek'] ."</td>";
                  echo "<td>". $mail['mesaj'] ."</td>";
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



