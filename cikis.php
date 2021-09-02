<?php
session_start();
session_destroy();

echo "Giriş sayfasına yönlendiriliyorsunuz!";
header("Refresh:4;url=index.php");


