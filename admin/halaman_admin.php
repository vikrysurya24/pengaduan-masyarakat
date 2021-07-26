<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];

    switch ($url) {
        case 'verifikasi_pengaduan';
            include 'verifikasi_pengaduan.php';
            break;
        case 'detail_pengaduan';
            include 'detail_pengaduan.php';
            break;
        case 'detail_tanggapan';
            include 'detail_tanggapan.php';
            break;
        case 'tanggapan_pengaduan';
            include 'tanggapan_pengaduan.php';
            break;
        case 'lihat_petugas';
            include 'lihat_petugas.php';
            break;
        case 'lihat_masyarakat';
            include 'lihat_masyarakat.php';
            break;
        case 'lihat_pengaduan';
            include 'lihat_pengaduan.php';
            break;
        case 'lihat_tanggapan';
            include 'lihat_tanggapan.php';
            break;
        case 'tambah_petugas';
            include 'tambah_petugas.php';
            break;
        case 'edit_petugas';
            include 'edit_petugas.php';
            break;
        case 'delete_petugas';
            include 'delete_petugas.php';
            break;
    }
} else {
?>
    <p>Selamat datang di Aplikasi Pengaduan Masyarakat yang dibuat untuk melaporkan pelanggaran atau penyimpangan yang terjadi pada lingkungan masyarakat sekitar.</p>

    <?php
    require '../config/koneksi.php';
    $sql = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE status='proses'");
    if ($cek = mysqli_num_rows($sql)) :
    ?>

        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Laporan Pengaduan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?= $cek; ?> Laporan dari Masyarakat</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-4x text-gray-300"></i>
                            <span class="badge badge-danger badge-counter"><?= $cek; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endif ?>

<?php } ?>