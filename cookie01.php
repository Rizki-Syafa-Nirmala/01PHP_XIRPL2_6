<?php
$value = 'Achmatim';
$value2 = 'Achmad Solichin';

setcookie("Username", $value);
setcookie("NamaLengkap", $value2, time()+3600);     /* expire in 1 hour */

echo "<h1>Ini halaman pertama pengesetan cookies</h1>";

echo"<h2>Klik <a href='cookie02.php'Di Sini</a> Untuk pemeriksaan cookie</h2>";
?>