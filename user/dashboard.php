<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];

    switch ($url) {
        case 'tulis_pengaduan';
            include 'tulis_pengaduan.php';
            break;
        case 'lihat_laporan';
            include 'lihat_laporan.php';
            break;
        case 'detail_pengaduan';
            include 'detail_pengaduan.php';
            break;
        case 'lihat_tanggapan';
            include 'lihat_tanggapan.php';
            break;
    }
} else {
    $output = '';
    $output .= '<p>Selamat datang di Aplikasi Pengaduan Masyarakat yang dibuat untuk melaporkan pelanggaran atau penyimpangan yang terjadi pada lingkungan masyarakat sekitar.';
    $output .= '</p>';
    echo $output;
}
