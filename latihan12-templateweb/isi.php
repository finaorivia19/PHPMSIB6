<div style="height:300px">
    <!-- Halaman Depan -->
    <?php
    //index.php?hal=produk
    $menu_bawah = array(
        'home' => 'home.php',
        'produk' => 'produk.php',
        'pesan' => 'pesan.php',
        'galeri' => 'galeri.php',
        'gesbuk' => 'blog.php' // Mengganti 'gesbuk' menjadi 'blog'
    );

    $hal = isset($_GET['hal']) ? $_GET['hal'] : '';
    if (!empty($hal) && array_key_exists($hal, $menu_bawah)) {
        include_once $menu_bawah[$hal];
    } else {
        include_once "home.php";
    }
    ?>
</div>
