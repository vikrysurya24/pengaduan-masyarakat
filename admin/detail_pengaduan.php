<?php
if (!isset($_SESSION["nama_petugas"])) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Aplikasi Pengaduan Masyarakat">
    <meta name="author" content="Vikry Surya P">

    <title>Aplikasi Pengaduan Masyarakat</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Detail Pengaduan</h6>
        </div>
        <div class="card-body">
            <div class="form-group cols-sm-6">
                <a href="?url=verifikasi_pengaduan" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Kembali</span>
                </a>
                <?php
                require '../config/koneksi.php';

                $sql = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE id_pengaduan='$_GET[id]'");
                $data = mysqli_fetch_array($sql);
                ?>
            </div>
            <?php if ($sql) : ?>
                <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group cols-sm-6">
                        <label for="tgl_pengaduan">Tanggal Pengaduan</label>
                        <input type="text" name="tgl_pengaduan" id="tgl_pengaduan" value="<?= $data['tgl_pengaduan']; ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group cols-sm-6">
                        <label for="isi_laporan">Isi Laporan</label>
                        <textarea id="isi_laporan" name="isi_laporan" cols="30" rows="10" class="form-control" readonly><?= $data['isi_laporan']; ?></textarea>
                    </div>
                    <div class="form-group cols-sm-6">
                        <label for="foto">Bukti Foto</label><br>
                        <img src="../assets/img/pengaduan/<?= $data['foto']; ?>" width="80%">
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </div>







    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>