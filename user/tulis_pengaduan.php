<?php
if (!isset($_SESSION["nama"])) {
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
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Tulis Pengaduan</h6>
        </div>
        <div class="card-body">
            <form action="user/simpan_pengaduan.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group cols-sm-6">
                    <label for="tgl_pengaduan">Tanggal Pengaduan</label>
                    <input type="text" name="tgl_pengaduan" id="tgl_pengaduan" value="<?= date('d M Y'); ?>" class="form-control" readonly>
                </div>
                <div class="form-group cols-sm-6">
                    <label for="nik">NIK</label>
                    <input type="text" name="nik" id="nik" value="<?= $_SESSION['nik']; ?>" class="form-control" readonly>
                </div>
                <div class="form-group cols-sm-6">
                    <label for="isi_laporan">Tulis Laporan</label>
                    <textarea id="isi_laporan" name="isi_laporan" cols="30" rows="10" class="form-control" autofocus></textarea>
                </div>
                <div class="form-group cols-sm-6">
                    <label for="foto">Unggah Foto</label><br>
                    <font style="color: red;">*tipe file gambar yang bisa diupload adalah <i>.jpg, .png, .jpeg</i></font>
                    <input type="file" id="foto" name="foto" accept=".jpg, .png, .jpeg" class="form-control">
                </div>
                <div class="form-group cols-sm-6">
                    <button type="submit" class="btn btn-primary text-uppercase">Simpan</button>
                    <button type="reset" class="btn btn-warning text-uppercase">Kosongkan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>