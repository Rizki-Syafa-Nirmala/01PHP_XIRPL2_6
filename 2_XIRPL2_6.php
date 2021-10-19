<!DOCTYPE html>
<html>
<head>
    <title>Belajar PHP-2</title>
</head>
<body>
    <?php
    echo "<h2>Perulangan</h2>";
//menampilkan tanggal dan waktu
        date_default_timezone_set('Asia/Jakarta');

//menampilkan tanggal, bulan, tahun
        $tgl = date('d-m-Y');
        echo $tgl;
        echo '<br>';

//menampilkan waktu
$waktu = date('H:i:s');
        echo $waktu;
        echo '<hr>';

//perulangan
$jumlah = 6;
    for($a=1; $a<=$jumlah; $a++)
        {
        for($c=$jumlah; $c>=$a; $c-=1){
        echo '*';
        }
        echo "<br/>";
        }
    ?>
</body>
</html>