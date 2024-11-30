<!-- index.php -->

<?php
    //cek parameter 'page' di URL
    $page = $_GET['page'] ?? 'home';

    //Judul halaman berdasarkan parameter 'page'
    $title = ucfirst($page) . ' - My Website';

    //Menampilkan konten berdasarkan halaman yang dipilih
    ob_start();
    switch ($page) {
        case 'home':
            include 'src/pages/home.php';
            break;
        case 'about':
            include 'src/pages/about.php';
            break;
        case 'products':
            include 'src/pages/products.php';
            break;
        case 'contact':
            include 'src/pages/contact.php';
            break;
        default:
            include 'src/pages/404.php';
            break;
    }
    $content = ob_get_clean();

    include 'src/layouts/layout.php';
?>