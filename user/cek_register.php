<?php
require '../config/koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];

$sql = mysqli_query($koneksi, "INSERT INTO masyarakat VALUES ('$nik','$nama','$username','$password','$telp')");

if ($sql > 0) {
    echo '<script>
        alert("Data berhasil disimpan, Silakan Login!");
        document.location.href = "../index.php";
    </script>';
} else {
    echo '<script>
        alert("Data gagal disimpan, Silakan registrasi ulang!");
        document.location.href = "register.php";
    </script>';
}
