<!-- header.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Biodata Diri</title>
    <style>
        /* CSS untuk header */
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        /* CSS styling for menu */
        nav {
            background-color: #555;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
        }

        nav a:hover {
            background-color: #777;
        }

        /* CSS untuk footer */
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <h1>Biodata Diri</h1>
</header>

<!-- menu.php -->
<nav>
    <a href="#">Home</a>
    <a href="#">Biodata</a>
    <a href="#">Pendidikan</a>
    <a href="#">Kontak</a>
</nav>
</body>
</html>

<!-- body.php -->
<style>
    .content {
        text-align: center;
        margin-top: 50px;
        max-width: 50%; /* Menyesuaikan lebar maksimum */
        display: inline-block; Menjadikan elemen inline-block untuk bisa sejajar
        font-size: 16px; 
        font-family: Arial, sans-serif; 
    }

    .content img {
        display: block;
        margin: 0 auto;
        margin-bottom: 20px;
    }
    .experience {
        text-align: left;
        margin-top: 50px;
        max-width: 50%; /* Menyesuaikan lebar maksimum */
        font-size: 16px; 
        font-family: Arial, sans-serif; 
    }
</style>

<div class="content">
    <h2>Informasi Pribadi</h2>
    <img src="foto_diri.jpg" alt="Foto Diri" width="180">
    <?php 
        $nama = "Fina Orivia Nurfadillah";
        $umur = 21;
        $alamat = "Indonesia Raya";
        $berat = 50;

        echo 'Nama saya ' .$nama. '<br>';
        echo 'Alamat di ' .$alamat. '<br>';
        echo 'Umur saya ' .$umur. ' tahun<br>';
        echo 'Berat saya ' .$berat. ' kg<br>';
    ?>
</div>

<div class="experience">
    <h2>Pengalaman Pribadi</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae mi ligula. Curabitur ultrices purus et tincidunt finibus. Proin gravida metus ac ex ultricies, id aliquet sapien malesuada. Duis in mauris enim. Donec maximus bibendum magna, vel sodales est tempor vel. Phasellus consectetur ligula in ipsum viverra, id interdum neque pretium. Duis posuere hendrerit sapien, non feugiat nunc fermentum et. Fusce varius orci sapien, sed scelerisque purus malesuada et. Nullam tincidunt tellus eu nisl ultricies, nec posuere dolor convallis.</p>
    <p>Integer quis urna et velit laoreet vestibulum. In id magna ut nisi vestibulum auctor. Suspendisse potenti. Donec id massa nec ligula venenatis consectetur. Integer luctus, velit vitae laoreet tempus, enim turpis eleifend purus, id scelerisque lorem ligula non libero. Aenean aliquam tristique risus a ultrices. In vitae massa lorem. Pellentesque consequat augue quis mauris tincidunt, eu eleifend felis consequat. Vivamus dapibus, nisi id pellentesque fringilla, felis est fermentum velit, vel fermentum felis dolor at urna. Nam pellentesque, ligula ut dapibus rutrum, risus risus tincidunt risus, nec placerat lorem sapien sit amet erat. Suspendisse lacinia arcu eu mi vestibulum, vitae hendrerit nisl dapibus. Proin tincidunt, dolor vel semper dapibus, tortor ligula rutrum nulla, ut suscipit elit eros sit amet nibh.</p>
</div>








