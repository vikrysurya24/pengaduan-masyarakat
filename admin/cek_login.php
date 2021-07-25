<?php
require '../config/koneksi.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = mysqli_query($koneksi, "SELECT * FROM petugas WHERE username = '$user' AND password = '$pass'");

$cek = mysqli_num_rows($sql);

if ($cek > 0) {
    $data = mysqli_fetch_array($sql);
    if ($data['level'] == 'admin') {
        session_start();
        $_SESSION['username'] = $user;
        $_SESSION['nama_petugas'] = $data['nama_petugas'];
        $_SESSION['id_petugas'] = $data['id_petugas'];
        $_SESSION['level'] = $data['level'];

        header('location: index.php');
    } else if ($data['level'] == 'petugas') {
        session_start();
        $_SESSION['username'] = $user;
        $_SESSION['nama_petugas'] = $data['nama_petugas'];
        $_SESSION['level'] = $data['level'];

        header('location: ../petugas/index.php');
    }
} else {
    echo '<script>
    alert("Username atau Password tidak salah!");
    document.location.href = "login.php";
</script>';
}
