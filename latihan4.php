<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM LOGIN</title>
</head>
<body>
    <h1>FORM LOGIN </h1>
    <form action="latihan4" method="POST">
        <div>
            <label>Nama</label>
            <input type ="text" name="nama">
        </div>
        <div>
            <label>Password</label>
            <input type ="password" name="password">
        </div>
        <div>
            <label>Email</label>
            <input type ="email" name="email">
        </div>
        <div>
        <label>Tanggal lahir</label>
        <input type ="date" name="tgl">
        </div>
        <div>
            <label>Jenis kelamin</label>
            <input type ="radio" name="jk" value="laki laki">laki laki
            <input type ="radio" name="jk" value="perempuan">perempuan
        </div>
        <div>
            <input type="submit" value="Simpan">
</div>
</form>
</body>
</html>
<hr>

<?php
error_reporting(0);
echo 'Nama' . $_POST['nama'] . '<br>';
echo 'Password' . $_POST['password'] . '<br>';
echo 'Email' . $_POST['email']. '<br>';
echo 'Tanggal lahir:' . $_POST['tgl']. '<br>';
echo 'Jenis Kelamin' . $_POST['jk']. '<br>';
?>