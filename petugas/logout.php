<?php
session_start();
unset($_SESSION['nama_petugas']);
session_destroy();
header('location: ../admin/login.php');
