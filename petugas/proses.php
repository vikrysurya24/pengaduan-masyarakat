<?php
require '../config/koneksi.php';

$sql = mysqli_query($koneksi, "UPDATE pengaduan set status='proses' WHERE id_pengaduan='$_GET[id]'");

if ($sql) {
    header('location: index.php?url=verifikasi_tanggapan');
}
