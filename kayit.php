<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $mesaj = "";
    $isim = $_POST["isim"];
    $soyisim = $_POST["soyisim"];
    $kullanici = $_POST["kullanici"];
    $eposta = $_POST["eposta"];
    $sifre = $_POST["sifre"];
    $sifre2 = $_POST["sifre2"];

    if($isim == "" || $soyisim == "" || $kullanici == "" || $eposta == "" || $sifre == "" || $sifre2 == ""){
        $mesaj = "Lütfen tüm alanları doldurunuz!";
    }
    else if(!filter_var($eposta,FILTER_VALIDATE_EMAIL)){
        $mesaj = "Lütfen geçerli bir e-posta giriniz!";
    }
    else if($sifre !== $sifre2){
        $mesaj = "Şifreler birbirinden farklı! Lütfen tekrar deneyiniz.";
    }
    else{
        $dosya = fopen("veriler.txt", "a");
        $icerik = $isim . "-" . $soyisim . "-" . $kullanici . "-" . $eposta . "-" . $sifre ."\n";
        fwrite($dosya,$icerik);
        fclose($dosya);
        $mesaj = "Tebrikler $kullanici, kaydınız yapıldı!";

    }

    echo $mesaj;
    echo "<br>";
    echo 'Yönlendiriliyorsunuz...';
    header("Refresh:4; url=index.php");
}