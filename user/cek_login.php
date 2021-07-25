<?php
require '../config/koneksi.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = mysqli_query($koneksi, "SELECT * FROM masyarakat WHERE username = '$user' AND password = '$pass'");

$cek = mysqli_num_rows($sql);

if ($cek > 0) {
    $data = mysqli_fetch_array($sql);
    session_start();
    $_SESSION['nama'] = $user;
    $_SESSION['nik'] = $data['nik'];

    header('location: ../index.php');
} else {
    echo '<script>
    alert("Username atau Password tidak ditemukan, Silakan registrasi!");
    document.location.href = "register.php";
</script>';
}
