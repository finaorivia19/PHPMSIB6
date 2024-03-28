<?php
$siswa = 'Fina Orivia';
$matakuliah = 'PHP';
$nilai = 80;

$ket = ($nilai >=60) ? 'Lulus' : 'Gagal';

if ($nilai >= 85 && $nilai <=100) $grade='A';
else if ($nilai >=75 && $nilai <= 85) $grade='B';
else $grade='';

switch($grade){
    case 'A' :
        $predikat = 'Memuaskan';
        break;
    case 'B' :
        $predikat = 'Bagus';
        break;
    case 'C' :
        $predikat = 'Cukup';
        break;
    case 'D' :
        $predikat = 'Kurang';
        break;
    case 'E' :
        $predikat = 'Sangat Kurang';
        break;
    default:
        $predikat = '';
        break;

}
echo "<hr>";

echo $siswa;
echo $matakuliah;
echo $nilai;
echo $grade;
echo $predikat;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai</title>
</head>
<body>
    <h1>Hasil Nilai</h1>
    <hr>
    <p>Nama Mahasiswa: <?php echo $siswa; ?></p>
    <p>Mata Kuliah: <?php echo $matakuliah; ?></p>
    <p>Nilai: <?php echo $nilai; ?></p>
    <p>Keterangan: <?php echo $ket; ?></p>
    <p>Grade: <?php echo $grade; ?></p>
    <p>Predikat: <?php echo $predikat; ?></p>
</body>
</html>


<!-- NAMA MAHASISWA : Fina Orivia
Mata Kuliah : PHP
Nilai : 80
Keterangan : Lulus
Grade: Baik -->