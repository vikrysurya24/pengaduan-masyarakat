<?php
require '../config/koneksi.php';

$id_tanggapan = $_POST['id_tanggapan'];
$id_pengaduan = $_POST['id_pengaduan'];
$tgl = $_POST['tgl_tanggapan'];
$tanggapan = $_POST['tanggapan'];
$id_petugas = $_POST['id_petugas'];
$status = 'selesai';

$sql = mysqli_query($koneksi, "INSERT INTO tanggapan (id_pengaduan, tgl_tanggapan, tanggapan, id_petugas)VALUES ('$id_pengaduan','$tgl','$tanggapan','$id_petugas')");
$update_status = mysqli_query($koneksi, "UPDATE pengaduan SET status='$status' WHERE id_pengaduan='$id_pengaduan'");

if ($sql) :
?>
    <script>
        alert('Tanggapan berhasil dikirim!');
        window.location = "index.php?url=verifikasi_pengaduan";
    </script>
<?php endif; ?>