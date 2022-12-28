<?php
require_once './connection.php';
require_once './home.php';
require_once './menu.php';
?>

<section id="iletisim">
            <h1 id="adresbaslik">Şimdi Biz Sizi Dinliyoruz !</h1>
            <div id="iletisimopak">
               <form action="" method="post">
                <div id="formgroup">
                <div id="solform">
                <input type="text" name="isim" placeholder="Ad Soyad" required class="iletisimcontrol">
                <input type="text" name="email" placeholder="E-Mail" required class="iletisimcontrol">
                </div>
                <div id="sagform">
                <input type="text" name="konu" placeholder="Konu Başlığı" class="iletisimcontrol">
                <input type="text" name="istek" placeholder="İstek Parça" class="iletisimcontrol">
                </div>          
                <textarea name="mesaj" id="" cols="30" rows="10" placeholder="Mesaj Giriniz" required class="iletisimcontrol"></textarea>       
                <input type="submit" value="Gönder">        
                </div>
               </form>   
                <div id="adres">
                    <h4 id="sosyalmedya">Bize Ulaşın !</h4>
                    <div class="sosyalbutonlar">
                          <a href="" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="" class="google-plus" ><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </div>               
                </div>
            </div>        
</section>

<?php       
        if(isset($_POST['isim'], $_POST['email'], $_POST['konu'], $_POST['istek'], $_POST['mesaj'])) {   
            $adi = $_POST['isim'];
            $email = $_POST['email'];
            $konu = $_POST['konu'];
            $istek = $_POST['istek'];
            $mesaj = $_POST['mesaj'];
  
            $conn->prepare("INSERT INTO iletisim (adi, mail, konu, istek, mesaj) VALUES (?,?,?,?,?)")->execute([$adi, $email, $konu, $istek, $mesaj]);
            echo "<script>alert('Mesaj gönderdiğiniz için teşekkür ederiz. Mesajınız ilgili birimlere iletilmiştir.');</script>";
        } 
?>
    
    
<?php
require_once './footer.php';
?>