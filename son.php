<script>
    var modal = document.getElementById("myModal");
    var modals = document.getElementById("myModal2");
    var span = document.getElementsByClassName("close")[0];
    var spans = document.getElementsByClassName("close2")[0];
    var btns = document.getElementById("myBtn2");
    var btnss = document.getElementById("myBtn3");

        function myFunctio() {
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
   
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", { 
    slidesPerView: 5, 
    spaceBetween: 20,
    navigation: { 
        nextEl: '.swiper-button-next', 
        prevEl: '.swiper-button-prev', 
    },
    loop: true
    });
    
</script>

</body>
</html>