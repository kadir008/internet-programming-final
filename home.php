<?php
require_once './connection.php';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>43 Station</title>
    <link rel="stylesheet" href="css/style.css"> 

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@700&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/ff8b0b792d.js" crossorigin="anonymous"></script>
</head>
<body>
 
  <div class="calmalistesi">
    <ul class="song-list">
        <?php
            $radyomuz = $conn->query("SELECT * FROM radyolar")->fetchAll();
            foreach ($radyomuz as $radyo) {
              echo "<li data-src='". $radyo['url']. "' data-name='". $radyo['adi']. "'". '></li>';
        }
        ?>
    </ul>
  </div>
  
