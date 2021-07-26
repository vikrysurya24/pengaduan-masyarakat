<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Aplikasi Pengaduan Masyarakat">
    <meta name="author" content="Vikry Surya P">

    <title>Aplikasi Pengaduan Masyarakat</title>

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h3 class="m-0 font-weight-bold text-secondary text-center">PEMERINTAH KABUPATEN BANJARBARU</h3>
            <h4 class="m-0 font-weight-bold text-secondary text-center">KELURAHAN SYAMSUDIN NOOR</h4>
            <h5 class="m-0 font-weight-bold text-secondary text-center">Jalan Kelinci IV Kode Pos 70721</h5>
            <br>
            <hr>
            <h5 class="m-0 font-weight-bold text-secondary text-center">Laporan Data Petugas</h5>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nama Petugas</th>
                            <th>Username</th>
                            <th>Telp</th>
                            <th>Level</th>
                        </tr>
                    </thead>
                    <?php
                    require '../config/koneksi.php';

                    $sql = mysqli_query($koneksi, "SELECT * FROM petugas");
                    $cek = mysqli_num_rows($sql);
                    ?>
                    <tbody>
                        <?php if ($cek < 1) : ?>
                            <tr>
                                <td colspan="7">
                                    <font color="red">Tidak ada laporan.</font>
                                </td>
                            </tr>
                        <?php else : ?>
                            <?php $i = 1; ?>
                            <?php foreach ($sql as $row) : ?>
                                <tr>
                                    <th><?= $i; ?></th>
                                    <td><?= $row['nama_petugas']; ?></td>
                                    <td><?= $row['username']; ?></td>
                                    <td><?= $row['telp']; ?></td>
                                    <td><?= $row['level']; ?></td>
                                </tr>
                    </tbody>
                    <?php $i++; ?>
                <?php endforeach ?>
            <?php endif; ?>
                </table>
                <br>
                <h6 class="m-0 font-weight-bold text-primary text-right">Landasan Ulin, <?= date('Y'); ?></h6>
                <br>
                <h6 class="m-0 font-weight-bold text-primary text-right">Nama Petugas : <?= $_SESSION['nama_petugas']; ?></h6>

            </div>
        </div>
    </div>

    <script>
        window.print();
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>