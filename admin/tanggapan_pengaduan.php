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
            <h6 class="m-0 font-weight-bold text-primary">Tanggapn</h6>
        </div>
        <div class="card-body">
            <div class="form-group cols-sm-6">
                <a href="?url=verifikasi_pengaduan" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Kembali</span>
                </a>
            </div>
            <form action="simpan_tanggapan.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                <input type="hidden" name="id_pengaduan" id="id_pengaduan" value="<?= $_GET['id']; ?>" class="form-control">
                <div class="form-group cols-sm-6">
                    <label for="tgl_tanggapan">Tanggal Tanggapan</label>
                    <input type="text" name="tgl_tanggapan" id="tgl_tanggapan" value="<?= date('Y-m-d'); ?>" class="form-control" readonly>
                </div>
                <div class="form-group cols-sm-6">
                    <label>ID Petugas</label><br>
                    <input type="text" class="form-control" name="id_petugas" value="<?= $_SESSION['id_petugas']; ?>" readonly>
                </div>
                <div class="form-group cols-sm-6">
                    <label for="tanggapan">Tulis Tanggapan</label>
                    <textarea id="tanggapan" name="tanggapan" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-google">Kirim Tanggapan</button>
            </form>
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