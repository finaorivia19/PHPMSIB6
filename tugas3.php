<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hasil Ujian</title>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
        background-color: 	#F5F5DC; 
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: 	#CD853F;
    }
    tfoot {
        background-color: 	#FFFAF0;
        font-weight: bold;
    }
    .total-table {
        background-color: 	#EEE8AA;
    }
    .total-table th, .total-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
</style>
</head>
<body>

<h2>DAFTAR NILAI MAHASISWA</h2>

<table>
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Mahasiswa</th>
      <th>Nilai</th>
      <th>Grade</th>
      <th>Predikat</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Data Mahasiswa
    $mahasiswa = array(
        array("Melati Putri", 75),
        array("Isyana Sarasvati", 82),
        array("Mutiara Berliana", 60),
        array("Evangelista", 90),
        array("Caca Marica", 55),
        array("Sasa Marisa", 78),
        array("Dinan Fajrina", 68),
        array("Jessica Kamil", 72),
        array("Ryana Dea", 85),
        array("Dinda Hauw", 63)
    );

    // Variabel untuk agregat
    $nilai_tertinggi = 0;
    $nilai_terendah = 100;
    $jumlah_nilai = 0;
    $jumlah_mahasiswa = count($mahasiswa);

    // Menampilkan data
    $i = 1;
    foreach ($mahasiswa as $data) {
        $nama = $data[0];
        $nilai = $data[1];
        $grade = ($nilai >= 65) ? 
                    (($nilai >= 85) ? 'A' : 
                        (($nilai >= 75) ? 'B' : 
                            (($nilai >= 70) ? 'C' : 
                                (($nilai >= 65) ? 'D' : 'E')))) : 'E';
        switch ($grade) {
            case 'A':
                $predikat = 'Memuaskan';
                break;
            case 'B':
                $predikat = 'Bagus';
                break;
            case 'C':
                $predikat = 'Cukup';
                break;
            case 'D':
                $predikat = 'Kurang';
                break;
            default:
                $predikat = 'Buruk';
        }

        // Update agregat
        $nilai_tertinggi = max($nilai_tertinggi, $nilai);
        $nilai_terendah = min($nilai_terendah, $nilai);
        $jumlah_nilai += $nilai;

        // Menampilkan baris data
        echo "<tr>
                <td>$i</td>
                <td>$nama</td>
                <td>$nilai</td>
                <td>$grade</td>
                <td>$predikat</td>
              </tr>";
        $i++;
    }
    ?>
  </tbody>
  <tfoot>
    <tr>
      <td colspan="2">Total</td>
      <td colspan="3">
        <table class="total-table">
            <tr>
                <td>Nilai Tertinggi</td>
                <td><?php echo $nilai_tertinggi; ?></td>
            </tr>
            <tr>
                <td>Nilai Terendah</td>
                <td><?php echo $nilai_terendah; ?></td>
            </tr>
            <tr>
                <td>Nilai Rata-rata</td>
                <td><?php echo number_format($jumlah_nilai / $jumlah_mahasiswa, 2); ?></td>
            </tr>
            <tr>
                <td>Jumlah Mahasiswa</td>
                <td><?php echo $jumlah_mahasiswa; ?></td>
            </tr>
            <tr>
                <td>Jumlah Keseluruhan Nilai</td>
                <td><?php echo $jumlah_nilai; ?></td>
            </tr>
        </table>
      </td>
    </tr>
  </tfoot>
</table>
<footer style="text-align: center; margin-top: 20px;">
    <p>&copy; 2024 by Fina Orivia</p> <!-- Tambahan copyright -->

</footer>
</body>
</html>
