<?php
session_start();

// Hapus semua data session
session_unset();
session_destroy();

// Arahkan kembali ke halaman login setelah logout
header("Location: ../login/index.php");
exit;
?>