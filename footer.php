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

<h1 id="muzikismi" style="display:none;"></h1>

<script src="main.js"></script>

<script>
function listem(gelenveri){
    songListItems.clear; 
    curr_track.src = gelenveri.getAttribute('data-src');
    playTrack();
    var muzikci = document.getElementById('muzikismi');
    muzikci.innerHTML = gelenveri.getAttribute('data-name');
    radyoadi.innerHTML = gelenveri.getAttribute('data-name');
    ozelkontrol = true;
    return false;
}
window.onload = function(){
    playTrack();
}
</script>


</body>
</html>