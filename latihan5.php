<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1>Form Input Nilai</h1>
<form action="latihan5.php"  method="POST">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama :</label> 
    <div class="col-8">
      <input id="text" name="text" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah :</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="">--PILIH MATA KULIAH--</option>
        <option value="html">HTML</option>
        <option value="ui/ux">UI/UX</option>
        <option value="php">PHP</option>
        <option value="laravel">LARAVEL</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nilai :</label> 
    <div class="col-8">
      <input id="text1" name="text1" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>


<?php
// Pastikan $_POST['proses'] sudah didefinisikan sebelum mengaksesnya
if(isset($_POST['proses'])) {
    $nama = $_POST['text'];
    $matakuliah = $_POST['matkul'];
    $nilai = $_POST['text1'];

    $ket = ($nilai >= 60) ? 'Lulus' : 'Gagal';

    if ($nilai >= 85 && $nilai <=100) {
        $grade='A';
    } elseif ($nilai >=75 && $nilai <= 85) {
        $grade='B';
    } else {
        $grade='';
    }

    switch($grade) {
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
        case 'E':
            $predikat = 'Sangat Kurang';
            break;
        default:
            $predikat = '';
    }

    // Output hasil hanya jika proses sudah terdefinisi
    ?>
    <p>Nama Mahasiswa: <?= isset($nama) ? $nama : '' ?></p>
    <p>Mata Kuliah: <?= isset($matakuliah) ? $matakuliah : '' ?></p>
    <p>Nilai: <?= isset($nilai) ? $nilai : '' ?></p>
    <p>Keterangan: <?= isset($ket) ? $ket : '' ?></p>
    <p>Grade: <?= isset($grade) ? $grade : '' ?></p>
    <p>Predikat: <?= isset($predikat) ? $predikat : '' ?></p>
<?php
} else {
    // Jika $_POST['proses'] belum terdefinisi, berikan pesan
    echo "Tidak ada data yang dikirimkan.";
}
?>
