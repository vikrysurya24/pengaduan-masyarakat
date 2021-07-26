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
            <h6 class="m-0 font-weight-bold text-primary">Edit Petugas</h6>
        </div>
        <div class="card-body">
            <?php
            require '../config/koneksi.php';
            $sql = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas='$_GET[id]'");
            if ($data = mysqli_fetch_array($sql)) :
            ?>
                <form action="update_petugas.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="id_petugas" value="<?= $data['id_petugas']; ?>">
                    <div class="form-group cols-sm-6">
                        <label for="nama_petugas">Nama Petugas</label>
                        <input type="text" name="nama_petugas" id="nama_petugas" value="<?= $data['nama_petugas']; ?>" class="form-control w-50">
                    </div>
                    <div class="form-group cols-sm-6">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" value="<?= $data['username']; ?>" class="form-control w-50">
                    </div>
                    <div class="form-group cols-sm-6">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" value="<?= $data['password']; ?>" class="form-control w-50">
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="showPassword">&nbsp;Lihat Password
                    </div>
                    <div class="form-group cols-sm-6">
                        <label for="telp">Telp</label>
                        <input type="text" name="telp" id="telp" value="<?= $data['telp']; ?>" class="form-control w-50">
                    </div>
                    <div class="form-group cols-sm-6">
                        <label for="level">Level</label>
                        <select name="level" id="level" class="form-control w-50">
                            <option value="">---Pilih Level---</option>
                            <?php if ($data['level'] == 'admin') {  ?>
                                <option value="<?= $data['level']; ?>" selected=''><?= $data['level']; ?></option>
                            <?php } else if ($data['level' == 'petugas']) { ?>
                                <option value="<?= $data['level']; ?>" selected=''><?= $data['level']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group cols-sm-6">
                        <button type="submit" class="btn btn-primary text-uppercase">Simpan</button>
                        <button type="reset" class="btn btn-warning text-uppercase">Kosongkan</button>
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
    <!-- jQuery -->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>

    <!-- Own Javascript -->
    <script src="../assets/js/script.js"></script>
</body>

</html>