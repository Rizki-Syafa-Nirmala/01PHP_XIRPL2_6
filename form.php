<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="proses.php" method="GET">
            <h1>Input Data</h1>
                <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="nama">
                            </td>
                        </tr>

                        <tr>
                            <td>E-Mail</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="email">
                            </td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="prosesdata" value="Proses Data"></td>
                        </tr>

                </table>
        </form>
    </body>
</html>