<?php

if (isset($_COOKIE['Username'])) {
    echo "<h1>Cookie 'Username' ada. Isinya : ".$_COOKIE
    ['Username']."</h1>";
} else {
    echo "<h1>Cookie 'Username' Tidak ada.</h1>";
}
if (isset($_COOKIE['NamaLengkap'])) {
    echo "<h1>Cookie 'NamaLengkap' ada. Isinya : ".$_COOKIE
    ['NamaLengkap']."</h1>";
}else {
    echo "<h1>Cookie 'NamaLengkap' Tidak ada.</h1>";
}

echo "<h2>Klik <a href='cookie01.php'Di sini</a> Untuk penciptaan cookies</h2>";
?>
