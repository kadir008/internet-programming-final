<?php
require_once './connection.php';
require_once './home.php';
require_once './menu.php';
?>

    <section id="iletisim">
            <h1 id="adresbaslik">Şimdi Biz Sizi Dinliyoruz !</h1>
            <div id="iletisimopak">
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
require_once './footer.php';
?>