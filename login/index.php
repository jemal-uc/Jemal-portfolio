<?php
session_start();
include "../includes/koneksi.php";

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$user' AND password='$pass'");
    
    if (mysqli_num_rows($query) === 1) {
        $_SESSION['login'] = true; // Set variabel session
        header("Location: ../admin/index.php");
        exit;
    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<!-- Form Login Sederhana -->
<form method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="login">Masuk</button>
</form>