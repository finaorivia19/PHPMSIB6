<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        input[type="text"],
        input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        td {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Input Mahasiswa</h2>
        <form method="post" action="objMahasiswa.php">
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="kuliah">Kuliah:</label>
                <input type="text" id="kuliah" name="kuliah" required>
            </div>
            <div class="form-group">
                <label for="nilai">Nilai:</label>
                <input type="number" id="nilai" name="nilai" min="0" max="100" required>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once 'Mahasiswa.php';

        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kuliah = $_POST['kuliah'];
        $nilai = $_POST['nilai'];

        $mahasiswa = new Mahasiswa($nim, $nama, $kuliah, $nilai);

        echo '<div class="container">';
        echo '<h2>Output Data Mahasiswa</h2>';
        echo '<table>';
        echo '<tr><th>NIM</th><th>Nama</th><th>Kuliah</th><th>Nilai</th><th>Grade</th><th>Predikat</th><th>Status</th></tr>';
        echo '<tr>';
        echo '<td>'. $mahasiswa->nim .'</td>';
        echo '<td>'. $mahasiswa->nama .'</td>';
        echo '<td>'. $mahasiswa->kuliah .'</td>';
        echo '<td>'. $mahasiswa->nilai .'</td>';
        echo '<td>'. $mahasiswa->grade .'</td>';
        echo '<td>'. $mahasiswa->predikat .'</td>';
        echo '<td>'. $mahasiswa->status .'</td>';
        echo '</tr>';
        echo '</table>';
        echo '</div>';
    }
    ?>
</body>
</html>
