<?php
require '../config/koneksi.php';

$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];
$level = $_POST['level'];

$sql = mysqli_query($koneksi, "INSERT INTO petugas (nama_petugas, username, password, telp, level)VALUES ('$nama_petugas','$username','$password','$telp', '$level')");

if ($sql) :
?>
    <script>
        alert('Data petugas berhasil ditambahkan!');
        window.location = "index.php?url=lihat_petugas";
    </script>
<?php endif; ?>