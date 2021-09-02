<!doctype html>
<html lang="tr">
<head>
    <link rel="stylesheet" href="odev3Css.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".tab-menu a").click(function(event) {
                event.preventDefault();
                $(this).parent().addClass("current");
                $(this).parent().siblings().removeClass("current");
                var tab = $(this).attr("href");
                $(".tab-content").not(tab).css("display", "none");
                $(tab).fadeIn();
            });
        });
    </script>

</head>
<body>

<div class="container">

    <ul class="tab-menu">
        <li class="current"><a href="#tab1">Giriş Yap</a></li>
        <li class="current"><a href="#tab2">Üye Ol</a></li>
    </ul>
    <div class="tab-container">
        <div id="tab1" class="tab-content">
            <form action="giris.php" method="post" id="form-giris" enctype="multipart/form-data">
                <input name="eposta" type="text" class="giris" value="" placeholder="E-Posta Adresiniz"/>
                <br>
                <input name="sifre" type="password" class="giris" value="" placeholder="Şifreniz"/>
                <br>
                <button type="submit" class="buton">Giriş Yap</button>
            </form>
        </div>
        <div id="tab2" class="tab-content">
            <form action="kayit.php" method="post" id="uye-giris" enctype="multipart/form-data">
                <input name="isim" type="text" id="tab2-isim" class="uye" placeholder="Adınız"/>
                <input name="soyisim" type="text" id="tab2-isim" class="uye" placeholder="Soyadınız"/>
                <br>
                <input name="kullanici" type="text" class="uye" placeholder="Kullanıcı Adınız"/>
                <br>
                <input name="eposta" type="text" class="uye" placeholder="E-Posta Adresiniz"/>
                <br>
                <input name="sifre" type="password" id="tab2-pass" class="uye" placeholder="Şifreniz"/>
                <input name="sifre2" type="password" id="tab2-pass" class="uye" placeholder="Şifreniz Tekrar"/>
                <br>
                <label>
                    <input type="checkbox" value="kosul" name="kosullar">
                    Kullanım Koşullarını ve Gizlilik Politikasını okudum, kabul ediyorum.
                </label>
                <br>
                <label>
                    <input type="checkbox" value="reklam" name="reklamlar">
                    Tarafıma bültenler ve ticari iletiler gönderilmesini istemiyorum.
                </label>
                <br><br>
                <button type="submit" class="buton">Üye Ol</button>
            </form>

        </div>
        <br>
        <p class="reset"><a href="../Odev3/index.php">Sayfayı Yenile</a></p>
    </div>
</div>

</body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function () {
        $('.js-example-basic-multiple').select2();
    })
</script>

