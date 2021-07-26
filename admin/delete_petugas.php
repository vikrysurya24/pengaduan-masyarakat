<?php
require '../config/koneksi.php';
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas='$id'");

if ($sql) {
?>
    <script>
        alert('Data petugas berhasil dihapus!');
        window.location = "index.php?url=lihat_petugas";
    </script>
<?php } ?>