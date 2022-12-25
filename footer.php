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
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    var spans = document.getElementsByClassName("close2")[0];
    var modals = document.getElementById("myModal2");
    var btns = document.getElementById("myBtn2");
    var btnss = document.getElementById("myBtn3");
        btn.onclick = function() {
            modal.style.display = "block";
        }
        span.onclick = function() {
            modal.style.display = "none";
        }
        spans.onclick = function () {
            modals.style.display = "none";
        }
        window.onclick = function(event) {
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