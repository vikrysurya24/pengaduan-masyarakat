<?php
require '../config/koneksi.php';

$tgl = date('Y-m-d');
$nik = $_POST['nik'];
$isi = $_POST['isi_laporan'];
$foto = $_FILES['foto']['name'];
$file = $_FILES['foto']['tmp_name'];
$status = 0;

$sql = mysqli_query($koneksi, "INSERT INTO pengaduan (tgl_pengaduan, nik, isi_laporan, foto, status) VALUES ('$tgl','$nik','$isi','$foto','$status')");

move_uploaded_file($file, "../assets/img/pengaduan/" . $foto);

if ($sql > 0) {
    echo '<script>
        alert("Laporan berhasil disimpan, Terima kasih telah mengisi laporan.");
        document.location.href = "../index.php";
    </script>';
} else {
    echo '<script>
        alert("Laporan gagal disimpan, Silakan isi ulang laporan!");
        document.location.href = "user/tulis_pengaduan.php";
    </script>';
}
