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

<script>
    var modal = parent.alt.myModal;
    var modals = parent.alt.myModal2;
    var btn = document.getElementById("myBtn");
    var span = parent.alt.close;
    var spans = parent.alt.close2;
    var btns = parent.alt.myBtn2;
    var btnss = parent.alt.myBtn3;

        btn.onclick = function() {
            modal.style.display = "block";
        }
        span.onclick = function() {
            modal.style.display = "none";
        }
        spans.onclick = function () {
            modals.style.display = "none";
        }
        parent.alt.window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
        }
        else if (event.target == modals) {
            modals.style.display = "none";
        }
    }
        btns.onclick = function() {
            modal.style.display = "none";
            modals.style.display = "block";
    }
        btnss.onclick = function() {
            modals.style.display = "none";
            modal.style.display = "block";
    }
</script>

</body>
</html>