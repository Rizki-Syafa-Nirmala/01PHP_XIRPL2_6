<?php
echo $_GET['v1'];
echo "";
echo $_GET['v2'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Belajar PHP</title>
    </head>
    <body>
        <fieldset id="ini">
            <label for="ini">DATA</label>
            <form method="POST" action="proses1.php">
                <p>Nama : <input type="text" name="nama"></p>
                <p>Alamat   : <input type="text" name="alamat"></p>
                <p><input type="submit" value="Proses" name="submit"></p>
            </form>    
        </fieldset>
    </body>
</html>        