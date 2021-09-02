<?php
session_start();

$uye = $_SESSION["aktif"];

$dosya = fopen("veriler.txt", "r");
while (!feof($dosya)) {
    $line = fgets($dosya);
    $verim = explode("-", $line);
    if ($verim[3] = $uye) {
        echo "Hoşgeldiniz " . $verim[0] . " " . $verim[1];
        echo "<br>";
        echo "E-posta adresiniz: " . $verim[3];
        echo "<br>";
        echo "Kullanıcı adınız: " . $verim[2];
        echo "<br>";
        break;
    }
};
fclose($dosya);
echo "<br>";
echo "<br>";
echo "<a href='cikis.php'> Çıkış Yap </a>";