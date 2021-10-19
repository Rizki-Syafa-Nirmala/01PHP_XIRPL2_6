<?php session_start();

echo "Nama anda adalah ".$_SESSION['Nama'];
echo "<br/><a href='session01.php'>Kembali ke halaman pertama</a>";
?>