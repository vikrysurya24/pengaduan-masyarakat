<?php
require '../config/koneksi.php';

$id = $_POST['id_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];
$level = $_POST['level'];

$sql = mysqli_query($koneksi, "UPDATE petugas SET nama_petugas='$nama_petugas',username='$username',password='$password',telp='$telp',level='$level' WHERE id_petugas='$id' ");

if ($sql) :
?>
    <script>
        alert('Data petugas berhasil diubah!');
        window.location = "index.php?url=lihat_petugas";
    </script>
<?php endif; ?>