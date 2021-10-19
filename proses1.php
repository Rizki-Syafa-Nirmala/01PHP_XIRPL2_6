<?php
    if (isset($_POST['nama']) AND isset($_POST['alamat'])) {
        $nama =$_POST['nama'];
        $alamat =$_POST['alamat'];
    }
    else
    {
        echo "Maaf, anda harus mengakses halaman ini dari form.html<br><br>";
    }
    if (!empty($nama)) 
    {
        echo "Nama: $nama <br />    Alamat: $alamat";
    }
    else {
        die("Maaf, anda harus mengisi nama");
    }