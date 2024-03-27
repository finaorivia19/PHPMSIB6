<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Belanja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: 0 auto;
            border: 2px solid #000;
            padding: 20px;
            border-radius: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Nota Belanja</h2>
        <table>
            <tr>
                <th>Nama Pelanggan</th>
                <td><?php echo $_POST['nama_pelanggan']; ?></td>
            </tr>
            <tr>
                <th>Produk</th>
                <td><?php echo $_POST['produk']; ?></td>
            </tr>
            <tr>
                <th>Jumlah Beli</th>
                <td><?php echo $_POST['jumlah_beli']; ?></td>
            </tr>
            <tr>
                <th>Harga Satuan</th>
                <td><?php echo $_POST['harga_satuan']; ?></td>
            </tr>
            <tr>
                <th>Total Belanja Sebelum Diskon</th>
                <td><?php echo $_POST['jumlah_beli'] * $_POST['harga_satuan']; ?></td>
            </tr>
            <tr>
                <th>Diskon</th>
                <td><?php 
                        $total_belanja = $_POST['jumlah_beli'] * $_POST['harga_satuan'];
                        $diskon = ($total_belanja > 100000) ? 0.1 * $total_belanja : 0;
                        echo $diskon; 
                    ?>
                </td>
            </tr>
            <tr>
                <th>Total Belanja Setelah Diskon</th>
                <td><?php echo $total_belanja - $diskon; ?></td>
            </tr>
            <tr>
                <th>PPN</th>
                <td><?php 
                        $total_belanja_setelah_diskon = $total_belanja - $diskon;
                        $ppn = 0.1 * $total_belanja_setelah_diskon;
                        echo $ppn; 
                    ?>
                </td>
            </tr>
            <tr>
                <th>Harga Bersih</th>
                <td><?php echo $total_belanja_setelah_diskon + $ppn; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
