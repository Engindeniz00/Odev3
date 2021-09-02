<?php
session_start();

$eposta = $_POST["eposta"];
$sifre = $_POST["sifre"];
$mesaj = "";


    if( $eposta === "" || $sifre === ""){
        $mesaj = "Lütfen tüm alanları doldurunuz!\nYeniden yönlendiriliyorsunuz!\n";
        header("Refresh:4; url=index.php");
    }
    else if(!filter_var($eposta,FILTER_VALIDATE_EMAIL)){
        $mesaj = "Lütfen geçerli bir e-posta giriniz!\nYeniden yönlendiriliyorsunuz!\n";
        header("Refresh:4; url=index.php");
    }
    else
    {
        $dosya = fopen("veriler.txt", "r");
        while(!feof($dosya))
        {
            $line = fgets($dosya);
            $verim = explode("-",$line);
            if($eposta === $verim[3] && $sifre === $verim[4])
            {
                $_SESSION["aktif"] = $eposta;
                echo "Tebrikler $verim[2], başarılı giriş yaptınız!\nLütfen bekleyiniz.Yönlendiriliyorsunuz...";
                header("Refresh:4; url=profil.php");
                break;
            }
        }
        fclose($dosya);
    }
    echo $mesaj;
